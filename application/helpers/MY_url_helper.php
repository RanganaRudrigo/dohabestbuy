<?php
/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/12/15
 * Time: 5:13 PM
 */

function new_current_url(){
    $url =current_url() ;
    $url1 = explode('/',$url);
    return str_replace('/'.end($url1),'',$url);
}

function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}