<?php
/**
 * Created by PhpStorm.
 * User: gowtham
 * Date: 5/11/15
 * Time: 8:11 AM
 */

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user_m','user');
    }

    function login(){
        $d['error'] ="";
        $this->form_validation->set_rules('UserLogin[username]','','required');
        $this->form_validation->set_rules('UserLogin[password]','','required');
        if($this->form_validation->run()){
            if($this->user->login()){
                if($this->session->userdata('url'))
                    redirect($this->session->userdata('url'));
                redirect(base_url()."admin");
            }else{
                  $d['error'] = true ;
                  $this->load->view('admin/login',$d);
            }
        }else{
            $this->session->sess_destroy();
            $this->load->view('admin/login',$d);
        }

    }

    function index(){
        if($this->input->post('logout')){
            $this->session->sess_destroy();
            redirect(current_url());
        }
        if($this->session->userdata('id') == FALSE){
            $this->login();
        }else{
            if($this->session->userdata('role') == 2 ){
                $this->session->sess_destroy();
                redirect(current_url());
            }
            $this->load->view('admin/dashboard');
        }
    }

    function logout(){
        $this->session->sess_destroy();
    }

    function create(){
        $this->load->model("product_model","pro");

        if($this->input->post()) {

            $this->db->trans_begin();
            $d = array();
            foreach($this->input->post('new_arrivals') as $a ){
                $d[]['id'] = $a ;
            }
            $this->pro->insertHome($this->pro->new_arrivals,$d);
            unset($d);

            $d = array();
            foreach($this->input->post('todaydeals') as $a ){
                $d[]['id'] = $a ;
            }
            $this->pro->insertHome($this->pro->todaydeals,$d);
            unset($d);

            $d = array();
            foreach($this->input->post('buyonegetone') as $a ){
                $d[]['id'] = $a ;
            }
            $this->pro->insertHome($this->pro->buyonegetone,$d);
            unset($d);

            $d = array();
            foreach($this->input->post('bundleoffer') as $a ){
                $d[]['id'] = $a ;
            }
            $this->pro->insertHome($this->pro->bundleoffer,$d);
            unset($d);

            $d = array();
            foreach($this->input->post('belowhunderd') as $a ){
                $d[]['id'] = $a ;
            }
            $this->pro->insertHome($this->pro->belowhunderd,$d);
            unset($d);


            $d = array();
            foreach($this->input->post('popular_product') as $a ){
                $d[]['id'] = $a ;
            }
            $this->pro->insertHome($this->pro->popular_product,$d);
            unset($d);



            if ($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }else{
                $this->db->trans_commit();
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }

            redirect(current_url());
        }

        $new  = $this->pro->getHome($this->pro->new_arrivals);
        foreach($new as $r )
            $d['new_arrivals'][] = $r->id ;

        $new  = $this->pro->getHome($this->pro->todaydeals);
        foreach($new as $r )
            $d['todaydeals'][] = $r->id ;

        $new  = $this->pro->getHome($this->pro->buyonegetone);
        foreach($new as $r )
            $d['buyonegetone'][] = $r->id ;

        $new  = $this->pro->getHome($this->pro->bundleoffer);
        foreach($new as $r )
            $d['bundleoffer'][] = $r->id ;

        $new  = $this->pro->getHome($this->pro->belowhunderd);
        foreach($new as $r )
            $d['belowhunderd'][] = $r->id ;

        $new  = $this->pro->getHome($this->pro->popular_product);
        foreach($new as $r )
            $d['popular_product'][] = $r->id ;
 
        $d['products'] = $this->pro->getALL();
        $this->load->view('admin/product_home_list',$d);
    }

	function password_reset(){
 
		
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|sha1');

		if( $this->form_validation->run() ){
			if (! $this->user->password_rest($this->input->post('password'),$this->session->userdata('id')) ){ 
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }else{ 
                $this->session->set_flashdata('valid', 'Password Reset Successfully');
            }
		//	p( $this->db->last_query() );
		}

		$this->load->view('admin/password_change',$d);	
	}

    function subscribe(){
        ob_start();
        $this->load->library('table');
        $query = $this->db->query('SELECT * FROM subscribe');
        $this->table->set_heading('#', 'Email');
        echo $this->table->generate($query);
        $content = ob_get_contents();
        ob_clean();
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=subscribe.xls");
        echo $content;
        exit();
    }

}