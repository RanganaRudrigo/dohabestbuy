<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 2/19/2016
 * Time: 12:28 PM
 */
class Manufacturer extends MY_Controller
{
    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
        $this->_checkLogin();
        $this->load->model("manufacturer_model","model");
    }


    function index(){

        $d['records'] = $this->model->getBy(array('status !=' => 2  ));
        $this->load->view('admin/manufacturer_list' , $d );
    }

    function create(){

        $this->form_validation->set_rules('form[title]', 'Name', 'required');

        if ($this->form_validation->run() == TRUE){
            if($this->model->create()){
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }
            redirect(current_url());
        }else{
            if($this->input->post()){
                $this->session->set_flashdata('error', validation_errors() );
                $d['result'] = (object)$this->input->post('form');
                foreach($this->input->post('image') as $image ){
                    $d['images'][] = (object) array('image'=>$image);
                }
            }
        }
        $this->load->view('admin/manufacturer_create' , $d );
    }

    function edit($id=0){
        $this->form_validation->set_rules('form[title]', 'Name', 'required');
        if ($this->form_validation->run() == TRUE){
            $this->model->id = $id ;
            if($this->model->update( $this->input->post('form') , "id=$id" ) && $this->model->insertMoreImage() ){
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }
            redirect(current_url());
        }else{
            if($this->input->post()){
                $this->session->set_flashdata('error', validation_errors() );
                $d['result'] = (object)$this->input->post('form');
                foreach($this->input->post('image') as $image ){
                    $d['images'][] = (object) array('image'=>$image);
                }
            }
        }

        $d['result'] = $this->model->getBy(array('id'=> $id ) , 1 );
        if(! is_object($d['result']))  show_404();

        $d['images'] = $this->model->getMoreImages($id);

        $this->load->view('admin/manufacturer_create' , $d );
    }


}