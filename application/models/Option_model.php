<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 2/19/2016
 * Time: 12:39 PM
 */
class Option_model extends MY_Model
{
    var $table = "option";
    var $image = "option_more";
    var $pre = "OP";


    function getNarrow($id){

      /*  $option = $this->db->from($this->image)
            ->select("$this->table.id , $this->table.title")
            ->join("product_option" ,"product_option.option_id = $this->image.id ")
            ->join("product" ,"product_option.product_id = product.id ")
            ->join($this->table,"$this->table.id = $this->image.option_id")
            ->group_by("$this->table.id")
            ->where("product.category",$id)
            ->get()->result();

        foreach($option as $op ){
            $op->sub = $this->db->from($this->image)
                ->select("$this->image.id , $this->image.title")
                ->join("product_option" ,"product_option.option_id = $this->image.id ")
                ->join("product" ,"product_option.product_id = product.id ")
                ->join($this->table,"$this->table.id = $this->image.option_id")
                ->group_by("$this->image.id")
                ->where("product.category",$id)
                ->where("$this->table.id",$op->id)
                ->get()->result();
        }

        return $option;*/
        return array();
    }


    function create($d=array())
    {
        if(empty($d))
            $d = $this->input->post('form');
        $d['create_by'] = $this->session->userdata('id');
        $d['create_date'] = date('d-m-Y hh:ms:s ') ;

        $this->db->trans_begin();
        $this->db->insert($this->table, $d );
        $this->id = $this->db->insert_id();
        if($this->pre){
            $this->db->update($this->table, array('code' =>  "$this->pre-$this->id"  ) , "id=$this->id " ) ;
        }

        if( $this->input->post('option') )
            $this->insertMoreOption();


        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $this->db->trans_commit();
            return TRUE ;
        }
    }


    function insertMoreOption()
    {
        foreach($this->input->post('option[title]') as $k => $img )
            $image[] = array('title'=>$img , 'option_id' => $this->id  );

        if(isset($image) && !empty($image) )
            $this->db->insert_batch($this->image,$image)   ;

        return true ;
    }

    function getMoreImages($id)
    {
        if($this->image == "" ) return null ;
        return $this->db->from($this->image)->where('option_id',$id)->where('status',1)->get()->result();
    }


    function updateMoreOption(){
        $this->db->update($this->image, array('status' =>  1  ) , "option_id=$this->id " ) ;
        foreach($this->input->post('option[title]') as $k => $img ){
            $this->db->replace( $this->image , array('title'=>$img , 'status'=>0 ,'option_id' => $this->id , 'id' => $this->input->post("option[id][$k]")  ));
        }
        $this->db->delete($this->image, array('option_id' => $this->id , 'status' =>  1 ));
        return true ;
    }

    function getOption($id){

        $option = $this->db->from($this->image)
            ->select("$this->table.id , $this->table.title")
            ->join("product_option" ,"product_option.option_id = $this->image.id ")
            ->join("product" ,"product_option.product_id = product.id ")
            ->join($this->table,"$this->table.id = $this->image.option_id")
            ->group_by("$this->table.id")
            ->where("product.id",$id)
            ->get()->result();

        foreach($option as $op ){
            $op->sub = $this->db->from($this->image)
                ->select("$this->image.id , $this->image.title")
                ->join("product_option" ,"product_option.option_id = $this->image.id ")
                ->join("product" ,"product_option.product_id = product.id ")
                ->join($this->table,"$this->table.id = $this->image.option_id")
                ->group_by("$this->image.id")
                ->where("product.id",$id)
                ->where("$this->table.id",$op->id)
                ->get()->result();
        }

        return $option;
    }
}