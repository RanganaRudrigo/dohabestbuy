<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 3/25/2016
 * Time: 3:09 PM
 */
class Spotlight extends MY_Controller
{
    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
        $this->_checkLogin();
        $this->load->model('spotlight_model','model');
    }

    function index(){
        $d['records'] = $this->model->getRecords();
        $this->load->view('admin/spotlight_list',$d);
    }

    function create(){

        $d['result'] = new Obj();

        $this->form_validation->set_rules('form[title]', 'Name', 'required');
        $this->form_validation->set_rules('form[image]', 'Image', 'required');

        if ($this->form_validation->run() == TRUE){
            if($this->model->create()){
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }
            redirect(current_url());
        }else{
            if($this->input->post()){
                $d['result'] = (object) $this->input->post('form');
                $this->session->set_flashdata('error', validation_errors() );
            }
        }
        $this->load->view('admin/spotlight_create',$d);
    }

    function manage($id){
        $obj = $this->model->getBy(array('id'=>$id),1);
        if(is_object($obj)){
            $d['result'] = $obj;

            $this->form_validation->set_rules('form[title]', 'Name', 'required');
            $this->form_validation->set_rules('form[image]', 'Image', 'required');

            if ($this->form_validation->run() == TRUE){
                if($this->model->update( $this->input->post('form') , "id =  $id " )){
                    $this->session->set_flashdata('valid', 'Record Update Successfully');
                }else{
                    $this->session->set_flashdata('error', 'Record Update Failure !!!');
                }
                redirect(current_url());
            }else{
                if($this->input->post()){
                    $d['result'] = (object) $this->input->post('form');
                    $this->session->set_flashdata('error', validation_errors() );
                }
            }


            $this->load->view('admin/spotlight_create',$d);
        }else
            show_404();
    }

}