<?php
/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/8/15
 * Time: 11:03 AM
 */

class MY_Controller extends CI_Controller{

    var $str;
    var $permission = false ;
    public function __construct(){
        parent::__construct();


       /* if($this->input->post('logout')){
            $this->session->sess_destroy();
            redirect(base_url());
        }*/
    }

    function common($url="index"){

        if(is_callable(array($this,$url))){
            call_user_func(array($this,$url));
        }else{
            show_404($page = '', $log_error = TRUE);
        }
    }

    function _checkLogin(){
        if(!$this->session->has_userdata('id')){
            $this->session->set_userdata('url',current_url());
            redirect(base_url()."admin");
        }else{
            if($this->session->userdata('role') == 2 ){
                $this->session->sess_destroy();
                redirect(current_url());
            }
        }
        if($this->session->has_userdata('url'))
            $this->session->unset_userdata('url');

        $this->checkPermission();

    }

    function checkPermission(){
        $this->load->model('user_m','user');
        $user = $this->session->userdata('role');

        if($user != 1 ){
            $access = $this->user->checkAccess($user,get_class($this));
            if( ! $access ){
                show_error('access privilege',$access);
            }
        }
    }

    public function do_upload() {
        ini_set('memory_limit','512M');
        $this->load->helper(array('form', 'url', 'file'));
        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] =  FCPATH.'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '30000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            //$error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload', $error);

            //Load the list of existing files in the upload directory
            $existingFiles = get_dir_file_info($config['upload_path']);
            $foundFiles = array();
            $f=0;
            foreach ($existingFiles as $fileName => $info) {
                if($fileName!='thumbs'){//Skip over thumbs directory
                    //set the data for the json array
                    $foundFiles[$f]['name'] = $fileName;
                    $foundFiles[$f]['size'] = $info['size'];
                    $foundFiles[$f]['url'] = $upload_path_url . $fileName;
                    $foundFiles[$f]['thumbnailUrl'] = $upload_path_url . 'thumbs/' . $fileName;
                    $foundFiles[$f]['deleteUrl'] = base_url() . 'upload/deleteImage/' . $fileName;
                    $foundFiles[$f]['deleteType'] = 'DELETE';
                    $foundFiles[$f]['error'] = null;
                    $f++;
                }
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('files' => $foundFiles)));
        } else {
            $data = $this->upload->data();

          /*  $config = array();
            $config['source_image']	=  'uploads/' . $data['file_name'] ;
            $config['wm_text'] = 'Gowtham ';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = './system/fonts/texb.ttf';
            $config['wm_font_size']	= '16';
            $config['wm_font_color'] = 'ffffff';
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'center';
            $config['wm_padding'] = '25';
            $this->load->library('image_lib', $config);

            $this->image_lib->watermark();*/



            /*
             * Array
              (
              [file_name] => png1.jpg
              [file_type] => image/jpeg
              [file_path] => /home/ipresupu/public_html/uploads/
              [full_path] => /home/ipresupu/public_html/uploads/png1.jpg
              [raw_name] => png1
              [orig_name] => png.jpg
              [client_name] => png.jpg
              [file_ext] => .jpg
              [file_size] => 456.93
              [is_image] => 1
              [image_width] => 1198
              [image_height] => 1166
              [image_type] => jpeg
              [image_size_str] => width="1198" height="1166"
              )
             */
            // to re-size for thumbnail images un-comment and set path here and in json array
            $config = array();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $data['full_path'];
            $config['create_thumb'] = TRUE;
            $config['new_image'] = $data['file_path'] . 'thumbs/';
            $config['maintain_ratio'] = TRUE;
            $config['thumb_marker'] = '';
            $config['width'] = 220;
            $config['height'] = 220;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();


            //set the data for the json array
            $info = new StdClass;
            $info->name = $data['file_name'];
            $info->size = $data['file_size'] * 1024;
            $info->type = $data['file_type'];
            $info->url = $upload_path_url . $data['file_name'];
            // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
            $info->thumbnailUrl = $upload_path_url . 'thumbs/' . $data['file_name'];
            $info->deleteUrl = base_url() . 'upload/deleteImage/' . $data['file_name'];
            $info->deleteType = 'DELETE';
            $info->error = null;

            $files[] = $info;
            //this is why we put this in the constants to pass only json data
            if ($this->input->is_ajax_request()) {



                echo json_encode(array("files" => $files));
                //this has to be the only data returned or you will get an error.
                //if you don't give this a json array it will give you a Empty file upload result error
                //it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)
                // so that this will still work if javascript is not enabled
            } else {
                $file_data['upload_data'] = $this->upload->data();
               echo json_encode($file_data);
            }
        }
    }

    public function deleteImage($file) {//gets the job done but you might want to add error checking and security
        $this->load->helper(array('form', 'url', 'file'));
        $success = unlink(FCPATH . 'uploads/' . $file);
        $success = unlink(FCPATH . 'uploads/thumbs/' . $file);
        //info to see if it is doing what it is supposed to
        $info = new StdClass;
        $info->sucess = $success;
        $info->path = base_url() . 'uploads/' . $file;
        $info->file = is_file(FCPATH . 'uploads/' . $file);

        if ($this->input->is_ajax_request()) {
            //I don't think it matters if this is set but good for error checking in the console/firebug
            echo json_encode(array($info));
        } else {
            //here you will need to decide what you want to show for a successful delete
            $file_data['delete_data'] = $file;
            $this->load->view('upload/delete_success', $file_data);
        }
    }

    function remove(){

        $this->model->remove($this->input->get('id'));
        echo $this->db->last_query();
    }




}