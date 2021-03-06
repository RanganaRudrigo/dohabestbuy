<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 02/26/2015
 * Time: 11:22 AM
 */
class Company extends MY_Controller
{
    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub

    }

    function index(){
        $this->_checkLogin();
        $this->load->model('company_model','model');
        $d['records'] = $this->model->getRecords();
        $this->load->view('admin/company_list',$d);
    }

    function create(){
        $this->_checkLogin();
        $this->load->model('company_model','model');
        $d['result'] = new Obj();

        $this->form_validation->set_rules('form[password]', '', 'password');
        $this->form_validation->set_rules('form[image]', 'Image', 'required');

        if ($this->form_validation->run() == TRUE){
            if($this->model->create()){
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }
            $this->_updateRoute();

            redirect(current_url());
        }else{
            if($this->input->post()){
                $d['result'] = (object) $this->input->post('form');
                $this->session->set_flashdata('error', validation_errors() );
            }
        }
        $this->load->view('admin/company_create',$d);
    }

    function manage($id){
        $this->_checkLogin();
        $this->load->model('company_model','model');
        $obj = $this->model->getBy(array('id'=>$id),1);
        if(is_object($obj)){
            $d['result'] = $obj;

            $this->form_validation->set_rules('form[password]', 'Name', 'password');
            $this->form_validation->set_rules('form[image]', 'Image', 'required');

            if ($this->form_validation->run() == TRUE){
               if($this->model->update( $this->input->post('form') , "id =  $id " )){
                    $this->session->set_flashdata('valid', 'Record Update Successfully');
                }else{
                    $this->session->set_flashdata('error', 'Record Update Failure !!!');
                }
                $this->_updateRoute();
                redirect(current_url());
            }else{
                if($this->input->post()){
                    $d['result'] = (object) $this->input->post('form');
                    $this->session->set_flashdata('error', validation_errors() );
                }
            }


            $this->load->view('admin/company_create',$d);
        }else
            show_404();
    }

    function _updateRoute(){
        $this->load->model('company_model','model');
        $this->load->helper('file');
        $string = read_file('./sample/routes.php');

        $com = $this->model->getBy(array('status'=>1 ) , "id,title");
        foreach($com as $c ){
            $string .= "\n\n".'$route["'.url_title($c->title).'"] = "home/company/'.$c->id.'";';
            $string .= "\n".'$route["'.url_title($c->title).'/admin"] = "admin/home/company/'.$c->id.'";';
            $string .= "\n".'$route["'.url_title($c->title).'/admin/product/create"] = "admin/company/product_create";';
            $string .= "\n".'$route["'.url_title($c->title).'/admin/product/edit/(.+)"] = "admin/company/product_edit/$1";';
            $string .= "\n".'$route["'.url_title($c->title).'/admin/product"] = "admin/company/product_list";';
            $string .= "\n".'$route["'.url_title($c->title).'/admin/home/logout"] = "admin/company/logout";';
        }
        write_file(APPPATH.'config/routes.php', $string) ;
    }


    function product_list(){

        $this->load->model("product_model","pro");
        $d['records'] = $this->pro->getBy(array('status !=' => 2 , "company_id" => $this->session->userdata('id')  ));
        $this->load->view('company/product_list' , $d );
    }

    function product_create(){

        $this->load->model("product_model","model");
        $this->load->model("option_model","option");
        $this->load->model("manufacturer_model","manu");
        $this->load->model("category_model","cat");


        $this->form_validation->set_rules('form[title]', 'Name', 'required');

        if ($this->form_validation->run() == TRUE){
            if($this->model->create() && $this->model->option() ){
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

        $d['option_list'] = $this->option->getBy(array('status !=' => 2  ) , null , "id,title" );
        foreach( $d['option_list'] as &$row ){
            $row->options = $this->option->getMoreImages($row->id );
        }

        $d['manu'] = $this->manu->getBy(array('status ' => 1  ));

        $this->load->view('company/product_create' , $d );
    }

    function product_edit($id){

        $this->load->model("product_model","model");
        $this->load->model("option_model","option");
        $this->load->model("manufacturer_model","manu");
        $this->load->model("category_model","cat");

        $this->form_validation->set_rules('form[title]', 'Name', 'required');
        if ($this->form_validation->run() == TRUE){
            $this->model->id = $id ;
            if($this->model->update( $this->input->post('form') , "id={$this->model->id}" ) && $this->model->insertMoreImage() && $this->model->option() ){
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
        $d['options'] = $this->model->getMoreOption($id);

        $d['cat']  = new stdClass();
        $d['cat']->id = $d['result']->category ;
        $d['cat']->text = "" ;
        $this->cat->getRoot($d['cat'] , $d['result']->category );
        $d['cat']->text = mb_substr($d['cat']->text, 0, -2);

        $d['option_list'] = $this->option->getBy(array('status !=' => 2  ) , null , "id,title" );
        foreach( $d['option_list'] as &$row ){
            $row->options = $this->option->getMoreImages($row->id );
        }

        $d['manu'] = $this->manu->getBy(array('status ' => 1  ));

        $this->load->view('company/product_create' , $d );

    }

    function logout(){
        $this->session->sess_destroy();
    }

    function remove(){
        $this->load->model('company_model','model');
        $this->model->remove($this->input->get('id'));
    }


}