<?php
/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/12/15
 * Time: 2:31 PM
 */

function curreny($amount){
    if(!is_numeric($amount))  $amount = 0;
    return number_format($amount,2,'.',',');
}

function TimeStampToDateTime($str){
    if(strlen($str) == 0 )
        return "";
    sscanf($str, '%d-%d-%d %d:%d:%d',$year ,$month, $day , $hour , $min , $sec );
    if($hour > 12 ){$hour -= 12 ;$am = "PM";}else {$am = "AM";}
    return "$year/$month/$day $hour:$min $am";
}

function price($str){
    if((bool) preg_match("/([0-9,]+(\.[0-9]{2})?)/", $str)){
        trim($str);
        $str = str_replace(',','',$str);
        return $str;
    }
    return "";
}