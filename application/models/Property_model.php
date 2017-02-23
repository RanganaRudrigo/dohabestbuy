<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 12/7/2015
 * Time: 11:39 AM
 */
class Property_model extends MY_Model{

    var $table = "property";
    var $image = "property_image";
    var $rooms = "rooms";

    function getALL(){
        return $this->db->from($this->table)
            ->select(" $this->id , $this->table.code , $this->title , $this->table.image , $this->price , category.title as category ")
            ->join("category" ,"category.id = $this->table.category")
            ->where("{$this->table}.status != ",2)
            ->get()->result();
    }

    function create(){
        $d = $this->input->post('form');
        $d['create_by'] = $this->session->userdata('id');
        $d['create_date'] = date('d-m-Y') ;

        $this->db->trans_begin();
        $this->db->insert($this->table, $d );
        $id = $this->db->insert_id();

        $this->db->update($this->table, array('code' =>  "PRO-".$id  ) , "id=$id" ) ;

        foreach($this->input->post('image') as $img ){
            $image[] = array('image'=>$img , 'p_id' => $id );
        }
        if(isset($image) && !empty($image) ){
            $this->db->insert_batch($this->image,$image);
        }

        foreach( $this->input->post('room[no_of_room]') as $k => $v ){
            $date = explode("-",$this->input->post("room[disable_date][$k]")) ;
           $r[] = array( 'no_of_room' => $v ,
               'p_id' => $id ,
               'max_allow' =>  $this->input->post("room[max_allow][$k]") ,
               'child' =>  $this->input->post("room[child][$k]") ,
               'title' =>  $this->input->post("room[title][$k]") ,
               'price' =>   price($this->input->post("room[price][$k]") ) ,
               'feature' =>  implode(',',$this->input->post("feature[$k]")) ,
               'booked_room' =>  implode(',',$this->input->post("booked_room[$k]")) ,
               'start_date' =>  isset($date[0]) ? trim($date[0]) : "" ,
               'end_date' => isset($date[1]) ? trim($date[1]) : "" ,
           );
        }

        if(isset($r) && !empty($r) ){
            $this->db->insert_batch($this->rooms,$r);
        }

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $this->db->trans_commit();
            return TRUE ;
        }

    }

    function getMoreImageById($id){
        return $this->db->from($this->image)
            ->select('image')
            ->where('p_id',$id)
            ->get()->result();
    }

    function getRoomsById($id){
        return $this->db->from($this->rooms)
            ->where('p_id',$id)
            ->where('dil',0)
            ->get()->result();
    }

    function updateImage($id){
        $this->db->where('p_id',$id);
        $this->db->delete($this->image);

        foreach($this->input->post('image') as $img ){
            $image[] = array('image'=>$img , 'p_id' => $id );
        }
        if(isset($image) && !empty($image) ){
            return  $this->db->insert_batch($this->image,$image) ? true : false ;
        }
        return true ;

    }

    function updateRooms($id){
        if(count($this->input->post('room[no_of_room]')  ) == 0 ) return true ;
        $this->db->trans_begin();

        $this->db->update($this->rooms,array('dil'=>1),"p_id=$id");

        foreach( $this->input->post('room[no_of_room]') as $k => $v ){
            $date = explode("-",$this->input->post("room[disable_date][$k]")) ;
            $r  = array( 'no_of_room' => $v ,
                'id' => $this->input->post("room[id][$k]")  ,
                'p_id' => $id ,
                'max_allow' =>  $this->input->post("room[max_allow][$k]") ,
                'child' =>  $this->input->post("room[child][$k]") ,
                'title' =>  $this->input->post("room[title][$k]") ,
                'price' =>  price($this->input->post("room[price][$k]") ),
                'feature' =>  implode(',',$this->input->post("feature[$k]")) ,
                'booked_room' =>  implode(',',$this->input->post("booked_room[$k]")) ,
                'start_date' =>  isset($date[0]) ? trim($date[0]) : "" ,
                'end_date' => isset($date[1]) ? trim($date[1]) : "" ,
                'dil' =>  0 ,
            );
            $this->db->replace($this->rooms,$r);
        }

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $this->db->trans_commit();
            return TRUE ;
        }
    }

}