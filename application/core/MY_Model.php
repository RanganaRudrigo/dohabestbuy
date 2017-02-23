<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 10/21/2015
 * Time: 12:35 PM
 */
class MY_Model extends CI_Model
{
    var $image ="";
    var $table ="";
    var $user = "user_tab";
    var $pre = false ;
    var $id   ;
    function create(){
        $d = $this->input->post('form');
        $d['create_by'] = $this->session->userdata('id');
        $d['create_date'] = date('Y-m-d h:m:s ') ;

        $this->db->trans_begin();
        $this->db->insert($this->table, $d );
        $this->id = $this->db->insert_id();
        if($this->pre){
            $this->db->update($this->table, array('code' =>  "$this->pre-$this->id"  ) , "id=$this->id " ) ;
        }

        if( $this->input->post('image') )
            $this->insertMoreImage();


        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $this->db->trans_commit();
            return TRUE ;
        }
    }

    function getRecords(){
        return $this->db->from($this->table)
            ->select("{$this->table}.* , {$this->user}.name as user ")
            ->join($this->user, "{$this->user}.id = {$this->table}.create_by")
            ->where("{$this->table}.status",1)
            ->get()->result();
    }

    function update($d=null,$con=null){
        return  $this->db->update($this->table,$d,$con) ? true : false ;
    }

    function getBy($con=null,$limit = false,$field=null , $sub_function = false ){

        if( is_null($con) || ! is_array($con)  )
            return false ;

        $this->db->from($this->table);

        if(!is_null($field))
            $this->db->select($field);

        foreach($con as $k => $v )
            $this->db->where($k , $v);

        if(is_array($sub_function)){
            foreach($sub_function as $k => $v )
                    $this->db->$k($v);
        }


        if($limit == 'count')
            return $this->db->count_all_results();
        elseif($limit == 1 )
            return $this->db->limit($limit)->get()->row();
        else if(!$limit)
            return $this->db->get()->result();
        elseif( is_array($limit ) )
            return $this->db->limit($limit[0],$limit[1])->get()->result();
        elseif(is_int($limit))
            return $this->db->limit($limit)->get()->result();

        return $this->db->get()->result();
    }

    function remove($id){
        $this->update(array('status'=>2) , "id = $id " );
    }

    function insertMoreImage(){
        $this->db->delete($this->image, array('id' => $this->id));
        foreach($this->input->post('image') as $k => $img )
            $image[] = array('image'=>$img , 'des' => $this->input->post("image_des[$k]"), 'id' => $this->id  );

        if(isset($image) && !empty($image) )
            $this->db->insert_batch($this->image,$image)   ;

        return true ;
    }

    function getMoreImages($id){
        if($this->image == "" ) return null ;
        return $this->db->from($this->image)->where('id',$id)->get()->result();
    }

}