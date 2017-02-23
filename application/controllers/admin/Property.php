<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 12/7/2015
 * Time: 11:38 AM
 */
class Property extends MY_Controller
{
    function __construct(){
        parent::__construct();
        $this->_checkLogin();
        $this->load->model('property_model','model');
        $this->type =  array(
            (object)array( 'id' => 1 , 'title' => 'Hotel' ) ,
            (object)array( 'id' => 2 , 'title' => 'Apartment' ) ,
            (object)array( 'id' => 3 , 'title' => 'House' ) ,
            (object)array( 'id' => 4 , 'title' => 'Villa' )
        );
        $this->load->model('Property_type_model','font');
    }

    function index(){

        if($this->input->is_ajax_request()){
            $d[$this->input->post('name')] = $this->input->post('val');
            $this->model->update($d,"id=".$this->input->post('id'));
        }else{
            $d['records'] = $this->model->getALL();
            $this->load->view('admin/property/property_list',$d);
        }
    }

    function create(){

        // $this->form_validation->set_rules('form[code]', 'property Code', 'required|is_unique[property.code]');
        $this->form_validation->set_rules('form[title]', 'Name', 'required');

        if ($this->form_validation->run() == TRUE){
//            p($this->input->post());
           if($this->model->create()){
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }
           redirect(current_url());
        }else{
            if($this->input->post()){
                $d['result'] = (object) $this->input->post('form');
                foreach($this->input->post('image') as $image ){
                    $d['images'][] = (object) array('image'=>$image);
                }
                foreach( $this->input->post('room[no_of_room]') as $k => $v ){
                    $date = explode("-",$this->input->post("room[disable_date][$k]")) ;
                    $d['rooms'][] = (object) array( 'no_of_room' => $v ,
                        'max_allow' =>  $this->input->post("room[max_allow][$k]") ,
                        'child' =>  $this->input->post("room[child][$k]") ,
                        'title' =>  $this->input->post("room[title][$k]") ,
                        'price' =>   price($this->input->post("room[price][$k]") ) ,
                        'feature' =>  implode(',',$this->input->post("feature[$k]")) ,
                        'booked_room' =>  implode(',',$this->input->post("booked_room[$k]")) ,
                        'start_date' =>  isset($date[0]) ? trim($date[0]) : "" ,
                        'end_date' => isset($date[1]) ? trim($date[1]) : "" ,
                    );
                }


                $this->session->set_flashdata('error', validation_errors() );
            }

        }


        $key = $this->model->getBy(array('status != '=>2 ) , false , 'city' ,array('group_by'=>'city') );
        foreach($key as $k )
            $d['city'][] = $k->city ;


        $d['font'] = $this->font->getBy(array('status'=>1 ) , false , "title,image,id") ;
        $d['type'] = $this->type ;
        $this->load->view('admin/property/property_create',$d);
    }

    function manage(){

        foreach( $this->input->post('room[no_of_room]') as $k => $v ){
            $r[] = array( 'no_of_room' => $v ,
                'max_allow' =>  $this->input->post("room[max_allow][$k]") ,
                'price' =>   price($this->input->post("room[price][$k]") ) ,
                'feature' =>  $this->input->post("feature[$k]") ,
                'disable_date' =>  $this->input->post("room[disable_date][$k]") ,
            );
        }

//        p($r);
//        p($this->input->post("feature"));


        $this->form_validation->set_rules('form[title]', 'Name', 'required');
        $this->form_validation->set_rules('form[price]', 'Name', 'price');
//        $this->form_validation->set_rules('form[short]', 'Name', 'max_length[150]');

        if ($this->form_validation->run() == TRUE){
            $data = $this->input->post('form');
            if($data['home'] != 1 ) $data['home'] = 0 ;
            if($this->model->update($data ,  "id = {$this->input->get('id')}" ) && $this->model->updateImage($this->input->get('id'))  && $this->model->updateRooms($this->input->get('id'))  ){
                $this->session->set_flashdata('valid', 'Record Updated Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Update Failure !!!');
            }

//            $this->db->last_query();
            redirect(current_url()."/?id=".$this->input->get('id'));
        }else{
            if($this->input->post())
                $this->session->set_flashdata('error', validation_errors() );
        }


        $key = $this->model->getBy(array('status'=>1 , "city !=" => "" ) , false , 'city' ,array('group_by'=>'city') );
        foreach($key as $k )
            $d['city'][] = $k->city ;

        $d['font'] = $this->font->getBy(array('status'=>1 ) , false , "title,image,id") ;
        $d['type'] = $this->type ;
        $d['result'] = $this->model->getBy(array('id'=> $this->input->get('id') ) , 1  );
        $d['images']= $this->model->getMoreImageById( $this->input->get('id')   );
        $d['rooms']= $this->model->getRoomsById( $this->input->get('id')   );
        $this->load->view('admin/property/property_create' ,$d ) ;

    }



}