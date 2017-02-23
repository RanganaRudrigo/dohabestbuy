<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 9/8/2016
 * Time: 3:53 PM
 */
class Zone extends  MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        parent::_checkLogin();
        $this->load->model("zone_model","zone");
    }

    function index(){
        redirect(current_url()."/manage");
    }

    function manage($i_id = 0 ){

        $d['zones'] = $this->zone->getBy(['Status '=> 1 ]) ;

        $this->_form($i_id,$d);

    }

    function delete($_id){
        $this->zone->update(['status'=>0],"ZoneId= $_id");
        redirect(base_url('admin/zone/manage'));
    }

    function _form($_id,&$d){

        $this->form_validation->set_rules('form[Zone]', 'Name', 'required');

        if($this->form_validation->run()){
            if(!$_id)
                $this->zone->create($this->input->post('form'));
            else
                $this->zone->update($this->input->post('form'),"ZoneId= $_id");
            redirect(current_url());
        }

        $d['result'] = $this->zone->getBy(['ZoneId'=>$_id],1);

        $this->load->view('admin/zone',$d);

    }

}