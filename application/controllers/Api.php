<?php

include APPPATH."libraries".DIRECTORY_SEPARATOR."REST_Controller.php";

class Api extends REST_Controller
{

    function getCityByZone_get(){
        $this->load->model("city_model","city");
        $this->response($this->city->getBy([ "ZoneId" => $this->get("ZoneId") , "Status"=>1],null , "CityId,City"));
    }

}