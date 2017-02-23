<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 4/11/2016
 * Time: 11:16 AM
 */
class Transaction extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('order');

    }

    function index(){

        $d['orders'] = $this->db->from("order")
            ->join('customer' , "order.customer_id = customer.id"  )
            ->select("order.* , customer.firstname , customer.lastname   ")
            ->where("order.status",0)
            ->where("order.state",NULL)
            ->order_by("order.id","desc")->get()->result();

        $this->load->view("admin/order_list",$d);

    }
    function deleted_records(){
        $d['orders'] = $this->db->from("order")
            ->join('customer' , "order.customer_id = customer.id"  )
            ->select("order.* , customer.firstname , customer.lastname   ")
            ->where("order.state",'D')
            ->order_by("order.id","desc")->get()->result();

        $this->load->view("admin/order_deleted_records",$d);

    }
    function cancel_records(){
        $d['orders'] = $this->db->from("order")
            ->join('customer' , "order.customer_id = customer.id"  )
            ->select("order.* , customer.firstname , customer.lastname   ")
            ->where("order.state",'C')
            ->order_by("order.id","desc")->get()->result();

        $this->load->view("admin/order_cancel_records",$d);

    }
    function detail($id){
        $this->load->model('Customer','cus');
        $order = $this->order->getByOrderId($id);
        if(is_object($order) ) {
            $d['orders'] = $this->order->getByCustomerId($order->customer_id);
            $d['customer'] = $this->cus->getBy( array('id' => $order->customer_id ) , 1 );
            $this->load->model("zone_model");
            $this->load->model("city_model");
            $d['customer']->state = $this->zone_model->getBy(["ZoneId"=>$d['customer']->ZoneId],1)->Zone;
            $d['customer']->city = $this->city_model->getBy(["CityId"=>$d['customer']->CityId],1)->City;

            $d['order'] = $order;
            $this->load->view('admin/order_detail_view',$d);
        }else{
            show_404();
        }
    }

    function change_status_to_delivered($id){
        echo json_encode( $this->order->changeDeliveryStatus($id , 1 ) ? array('success'=>'Item Marked as Delivered ') : array('error'=> 'Invalid Order Id No' ) );
    }
    function roll_back_delete($id){
        echo json_encode(  $this->db->update( $this->order->_table  ,['state'=>null] ,['id'=>$id] ) ? array('success'=>'Rollback Deleted Record') : array('error'=> 'Invalid Order Id No' ) );
    }

	function remove($id ){
		 echo json_encode( 
		 $this->order->delete_order($id)
		 ? array('success'=>'Successfully Transaction Deleted') : array('error'=> 'Failure Please try again later' ) );
	}
	function canceled_order($id ){
		 echo json_encode(
             $this->db->update( $this->order->_table  ,['state'=>'C'] ,['id'=>$id])
		 ? array('success'=>'Successfully Transaction Canceled Order') : array('error'=> 'Failure Please try again later' ) );
	}
	
}