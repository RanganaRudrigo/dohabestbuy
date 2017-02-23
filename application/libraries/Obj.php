<?php
/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 3/18/15
 * Time: 10:15 AM
 */

class Obj {

    function __construct(){
        $this->status = 1 ;
        $this->status_array = arrayToObject(array(
            array('id'=>1 , 'name'=> "Active"),
            array('id'=>0 , 'name'=> "Deactive")
        ));
        $this->size_array = arrayToObject(array(
            array('id'=>"normal" , 'name'=> "normal"),
            array('id'=>"large" , 'name'=> "large")
        ));
        $this->date = date('Y-m-d H:i:s');
    }

    function __set($n,$v){
        $this->$n = $v;
    }
    function __get($n){
        return "";
    }

} 