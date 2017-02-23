<?php
/**
 * Created by PhpStorm.
 * User: gowtham
 * Date: 5/11/15
 * Time: 8:19 AM
 */

class User_m extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function login(){
        $q = $this->db->get_where('user_tab',array('name' => $this->input->post('UserLogin[username]') , 'password'=>sha1($this->input->post('UserLogin[password]'))  ));
        if($q->num_rows() > 0 ){
            $r = $q->first_row();
            $user = array(
                'id'=>$r->id,
                'name'=>$r->name ,
                'role' => $r->type
            );
            $this->session->set_userdata($user);
            return true;
        }
        return false ;
    }

    function createDatabase($t){
        $this->load->helper('file');
        $string = read_file(APPPATH.'models/dbschema/dbschema.sql');
        $tables = explode(';',$string);
        foreach($tables as $table ){
            $table = explode('-',$table);
            $field = explode(',',$table[1]);
            $this->dbforge->add_field($field);
            $this->dbforge->create_table(trim($table[0]) ,TRUE ) ;
        }
        if($t == 0 ){
            $string = read_file(APPPATH.'models/dbschema/data.sql');
            $queries = explode(';',$string);
            foreach($queries as $query)
                $this->db->query($query);
        }

    }

	function password_rest($password,$user_id){
		
		return $this->db->update("user_tab",['password' => $password ], ["id"=>$user_id]) ? TRUE : FALSE; 
	}

    function checkAccess($user_type,$cls){
        /*$privilege =  $this->db->from('privilege_access')
            ->where('p_id',$user_type)
            ->where('controller',$cls)
            ->get()->result();
        foreach($privilege as $p ){
            if($p->controller == strtolower($cls)  ){
                return $p->access ;
            }
        }*/
        return true ;
    }

}