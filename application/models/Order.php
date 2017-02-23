<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 4/8/2016
 * Time: 11:13 AM
 */
class Order extends MY_Model
{
    var $_table = 'order';

    function create(){
        $this->db->trans_begin();

        $user = $this->session->userdata("front_user") ;
        $this->db->insert("order" ,
            array(
                'cart_details' =>  json_encode($this->cart->contents()) ,
                'customer_id' => $user['id'],
                'customer_detail' => json_encode($this->session->userdata("front_user")) ,
                'total' => $this->cart->total()   ,
                'shipping' => $this->session->userdata("shipping_amount")   ,
                'payment' => $this->session->userdata("payment") ,
                'status' => $this->session->userdata("payment") == 1 ? 10 : 0 ,
                'date' => date('Y-m-d h:m:s') ,
                'receipt_no' => time()
            )
        );


        $this->id = $this->db->insert_id();



        foreach($this->cart->contents() as $item ){
          sscanf($item['id'], "%d-%d", $id, $ipa);
            $order_detail[] = array(
                'order_id' => $this->id ,
                'product_id' => $id,
                'product_option_id' => $ipa,
                'qty' => $item['qty'],
                'price' => $item['price']
            );
            if($this->session->userdata("payment") != 1 ) {
                $this->db->set('qty', "qty - ". $item['qty'], FALSE);
                $this->db->where("product_option_id", $ipa);
                $this->db->update("product_option");
            }
        }
        $this->db->insert_batch('order_detail',$order_detail);


        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $this->db->trans_commit();
            return TRUE ;
        }

    }

    function getByOrderId($id){
        return $this->db->from("order")->where('id',$id)->get()->row();
    }
	
	function delete_order($id){
        return $this->db->where('id',$id)->update("order", [ 'state' => 'D' ] ) ? 1 : 0 ;
    }

    function confirm($order){
        $this->db->where('id',$order->id);
        $this->db->update('order' , array(
            'status' =>  $this->input->get('vpc_TxnResponseCode') ,
            'receipt_no' => $this->input->get('vpc_ReceiptNo'),
            'transaction_no' => $this->input->get('vpc_TransactionNo')
        ) );

        if($this->input->get('vpc_TxnResponseCode') == 0 ) {
            $orders = $this->db->from("order_detail")->where("order_id",$order->id)->get()->result();
 
            foreach ($orders as $ord){
                $this->db->set('qty', "qty - $ord->qty", FALSE);
                $this->db->where("product_option_id",$ord->product_option_id);
                $this->db->update("product_option");
            }

        }

        $this->db->where("customer_id",$order->customer_id);
        $this->db->where("status",10);
        $this->db->delete("order");



    }

    function getByCustomerId($id){
        return $this->db->from("order")->where('customer_id',$id)->order_by('id','desc')->get()->result();
    }

    function changeDeliveryStatus($id,$status){
        $this->db->where('id',$id);
       return $this->db->update('order' , array(
            'delivery' =>  $status ,
        ) ) ? TRUE : FALSE ;
    }

}