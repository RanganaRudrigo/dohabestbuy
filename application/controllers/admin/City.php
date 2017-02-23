<?php

class City extends  MY_Controller
{

    function __construct()
    {
        parent::__construct();
        parent::_checkLogin();
        $this->load->model("zone_model","zone");
        $this->load->model("city_model","city");
    }

    function index(){
        redirect(current_url()."/manage");
    }

    function manage($i_id = 0 ){

        $d['zones'] = $this->zone->getBy(['Status'=> 1 ]) ;
        $this->db->join("zone","zone.ZoneId = city.ZoneId")
            ->select("city.* , zone.Zone");
        $d['cities'] = $this->city->getBy(['city.Status'=> 1 ]) ;

        $this->_form($i_id,$d);

    }

    function delete($_id){
        $this->city->update(['status'=>0],"CityId= $_id");
        redirect(base_url('admin/zone/manage'));
    }

    function _form($_id,&$d){

        $this->form_validation->set_rules('form[City]', 'Name', 'required');

        if($this->form_validation->run()){
            if(!$_id)
                $this->city->create($this->input->post('form'));
            else
                $this->city->update($this->input->post('form'),"CityId= $_id");
            redirect(current_url());
        }

        $d['result'] = $this->city->getBy(['CityId'=>$_id],1);

        $this->load->view('admin/city',$d);

    }

}