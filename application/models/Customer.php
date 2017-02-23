<?php
/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 2/15/2016
 * Time: 3:33 PM
 */


class Customer extends MY_Model {

    var $table = 'customer';

    function getRecords(){
        return $this->db->from($this->table)
            ->select("{$this->table}.* , {$this->user}country.name as country ")
            ->join("country","country.id = {$this->table}.country_id")
            ->get()->result();
    }

    function create($data=array()){
        $data['date_added'] = date('Y-m-d h:m:s ') ;
        $this->db->trans_begin();
        $this->db->insert($this->table, $data );
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $id = $this->db->insert_id();
            $this->db->trans_commit();
            return $id ;
        }

    }

    function update($d=null,$con=null){
        return $this->db->update($this->table,$d,$con) ? TRUE : FALSE;
    }



    function checkout($data){
        $this->db->trans_begin();
        $this->db->insert("checkout", $data ) ;
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $id = $this->db->insert_id();
            $this->db->trans_commit();
            return $id ;
        }

    }

    function changePassword($email){
        $cus = $this->db->from($this->table)->where("email",$email)->select("firstname ,lastname , email,id")->limit(1)->get()->row();
        if(is_object($cus)){
            $this->load->helper('string');
            $password =  strtolower(random_string('alnum', 8)) ;
            $this->update(array('password'=>$password) , "id = $cus->id" );
            $cus->password = $password ;
            return $cus ;
        }
        return false ;
    }

}