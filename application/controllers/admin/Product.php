<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 2/19/2016
 * Time: 3:36 PM
 */
class Product extends MY_Controller
{
    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
        $this->_checkLogin();
        $this->load->model("product_model","model");
        $this->load->model("option_model","option");
     //   $this->load->model("manufacturer_model","manu");
        $this->load->model("category_model","cat");
    }

    function index(){

        $d['records'] = $this->model->getALL();
        $this->load->view('admin/product_list' , $d );
    }

    function create(){


        $this->form_validation->set_rules('form[title]', 'Name', 'required');
        $this->form_validation->set_rules('form[price]', '', 'price');

        if ($this->form_validation->run() == TRUE){
            if($this->model->create() && $this->model->option()&& $this->model->insertDataSheet() ){
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
                foreach($this->input->post('option') as $image ){
                    $d['options']  = (object) $image ;
                }
                foreach($this->input->post('data') as $image ){
                    $d['datasheet']  = (object) $image ;
                }
            }
        }

        $d['option_list'] = $this->option->getBy(array('status ' => 1  ) , null , "id,title" );
        foreach( $d['option_list'] as &$row ){
            $row->options = $this->option->getMoreImages($row->id );
        }

     //   $d['manu'] = $this->manu->getBy(array('status ' => 1  ));

        $this->load->view('admin/product_create' , $d );
    }

    function edit($id=0){
        $this->form_validation->set_rules('form[title]', 'Name', 'required');
        $this->form_validation->set_rules('form[price]', '', 'price');
        if ($this->form_validation->run() == TRUE){
            $this->model->id = $id ;
            if($this->model->update( $this->input->post('form') , "id={$this->model->id}" )
                && $this->model->insertMoreImage() 
                && $this->model->option() 
                && $this->model->insertDataSheet() ){
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
        $d['datasheet'] = $this->model->getMoreDataSheet($id);

        $d['cat']  = new stdClass();
        $d['cat']->id = $d['result']->category ;
        $d['cat']->text = "" ;
        $this->cat->getRoot($d['cat'] , $d['result']->category );
        $d['cat']->text = mb_substr($d['cat']->text, 0, -2);

        $d['option_list'] = $this->option->getBy(array('status ' => 1  ) , null , "id,title" );
        foreach( $d['option_list'] as &$row ){
            $row->options = $this->option->getMoreImages($row->id );
        }

       // $d['manu'] = $this->manu->getBy(array('status ' => 1  ));

        $this->load->view('admin/product_create' , $d );
    }

    function updatestock(){

        if($this->input->is_ajax_request()){

            echo json_encode( array( 'result' => $this->model->updateStock() ) );
            exit;
        }

        $d['records'] = $this->model->getAllForUpdate();
     //   echo $this->db->last_query();
        $this->load->view('admin/product_list_update_stock' , $d );
    }

    function reviews($view='view'){
        switch ($view){
            case 'remove' :
                $this->db->where("id",$this->input->get('id'))->delete('reviews'); break;
            case 'update' :
                $this->db->update('reviews',
                    array('status' => $this->input->get('status') ) ,
                    array('id' => $this->input->get('id') )
                    ); break;
            default :
            case 'view' :
                $d['records'] = $this->db->from("reviews")
                    ->join($this->model->table , "{$this->model->table}.id = reviews.id_product")
                    ->select("reviews.* , {$this->model->table}.title as product_title , {$this->model->table}.image")
                    ->order_by('reviews.id','desc')
                    ->get()->result();

                $this->load->view('admin/product_reviews',$d);
                break;
        }
    }

    function product_option(){

        if( $this->input->is_ajax_request() ){

            switch($this->input->get('action')){
                case 'add':
                    if( $this->input->get('title') ){
                        $this->db->insert("option_more",[
                            'option_id' => 1 ,
                            'title' => $this->input->get('title')
                        ]);
                        $result = [
                            'hasError' => false ,
                            'success' => "Record inserted Successfully" ,
                            'id' => $this->db->insert_id()
                        ];
                    }else{
                        $result = [
                            'hasError' => true ,
                            'errors' => "Color Title is required Field "
                        ];
                    }
                    echo json_encode($result);
                    break;
                case "update" :
                    if( $this->input->get('title') ){
                        $this->db->update("option_more",
                            [  'title' => $this->input->get('title')   ] ,
                            ['id' => $this->input->get('id') ]
                        );
                        $result = [
                            'hasError' => false ,
                            'success' => "Record Updated Successfully"
                        ];
                    }else{
                        $result = [
                            'hasError' => true ,
                            'errors' => "Color Title is required Field "
                        ];
                    }
                    echo json_encode($result);
                    break;
                    break;
                case 'remove' :
                    echo json_encode([
                        'hasError' => $this->db->update("option_more",['status'=>0],['id'=>$this->input->get('id')]) ?  FALSE :TRUE
                    ]);
                    break;
                default:
                    break;
            }

            exit;
        }

        $d['records'] = $this->db->from("option_more")->where("option_id",1)->where("status",1)->get()->result();

        $this->load->view('admin/product_option' , $d );
    }

    function rearrange(){
        $this->load->helper('text');
        if($this->input->is_ajax_request() ) {
            foreach ($this->input->post('order') as $order_no => $id )
                $this->db->update($this->model->table , array( 'order_no' => $order_no +1) , array('id' => $id) );
            exit;
        }

       $d['categories'] = $this->cat->getBy(array('status' => 1 , "category_id" => 0 ));
        if($this->input->get('sub_id')){ 
            $d['products'] = $this->model->getProList( $this->input->get('sub_id') , 'id,title' ,false );
        }else if($this->input->get('category_id')){
            $d['products'] = $this->model->getProList( $this->input->get('category_id') , 'id,title' ,false );
        }else if(!empty($d['categories'])) {
            $d['products'] = $this->model->getProList($d['categories'][0]->id ,  'id,title',false  );
        }else{
            $d['products'] = [] ;
        }

        $this->load->view('admin/product_reorder',$d);
    }

}