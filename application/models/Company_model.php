<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 2/26/2016
 * Time: 2:34 PM
 */
class Company_model extends MY_Model
{
    var $table ="company";
    var $pre = 'COM' ;


    function login($id)
    {
        $this->CI = get_instance();
        $com = $this->getBy(array('id' => $id, 'username' => $this->input->post('UserLogin[username]'), 'password' => $this->CI->encrypt->encrypt($this->input->post('UserLogin[password]'))), 1, "id,title");

        if (is_object($com)) {
            $user = array(
                'id' => $com->id,
                'name' => $com->title,
                'role' => 2
            );
            $this->session->set_userdata($user);
            return true;
        } else {
            return false;
        }
    }

}