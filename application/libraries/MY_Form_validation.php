<?php
/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/21/15
 * Time: 6:09 AM
 */

Class MY_Form_validation extends CI_Form_validation {

    public function is_unique_update($str, $field){
        $this->CI->form_validation->set_message('is_unique_update', 'The {field} field must contain a unique value.');
        if($this->CI->input->post('id')){
            sscanf($field, '%[^.].%[^.]', $table, $field);
            return isset($this->CI->db)
                ? ($this->CI->db->limit(1)->get_where($table, array($field => $str , 'status'=> 1 , 'id !='=> $this->CI->input->post('id') ))->num_rows() === 0)
                : FALSE;
        }
        return FALSE ;
    }
    public function is_unique($str, $field){
        $this->CI->form_validation->set_message('is_unique', 'The {field} field must contain a unique value.');
        sscanf($field, '%[^.].%[^.]', $table, $field);
        return isset($this->CI->db)
            ? ($this->CI->db->limit(1)->get_where($table, array($field => $str , 'status'=> 1 ))->num_rows() === 0)
            : FALSE;
    }

    public function price($str){
        $this->CI->form_validation->set_message('price', 'The {field} field must contain a price value.');
        if((bool) preg_match("/([0-9,]+(\.[0-9]{2})?)/", $str)){
            trim($str);
            $str = str_replace(',','',$str);
            return $str;
        }
        return FALSE;
    }
    public function less_than_price($str, $max){
        $this->CI->form_validation->set_message('less_than_price', 'The {field} field must contain a number less than {param}.');
        $str = $this->price($str);
        $max = $this->price($max);
        return is_numeric($str) ? ($str < $max) : FALSE;
    }
    public function datetime($str){
        sscanf($str, '%d/%d/%d %d:%d %[^.]', $year, $month, $day ,  $hour , $min , $am );
        if($am == "PM") $hour += 12 ;
        return "$year-$month-$day $hour:$min:00" ;
        //06/04/2015 4:05 PM
    }
    function password($str){
        return $this->CI->encrypt->encrypt($str)  ;
    }
}