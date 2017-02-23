<?php
/**
 * Created by PhpStorm.
 * User: gowtham
 * Date: 5/11/15
 * Time: 8:08 AM
 */


if ( ! function_exists('arrayToObject'))
{
    function arrayToObject($d) {
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return (object) array_map(__FUNCTION__, $d);
        }
        else {
            // Return object
            return $d;
        }
    }
}



if ( ! function_exists('objectToArray'))
{
    function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }

        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
    }
}



if ( ! function_exists('p'))
{
    function p($item)
    {
        //        if(is_array($item)){
        echo "<pre>";
        print_r($item);
        echo "</pre>";
        //        }
    }
}




if ( ! function_exists('unique'))
{
    function unique(&$item,$k)
    {
        $temp_uids=array();
        $unique_results = array();
        foreach($item as $result){
            if(is_array($result))    $result = arrayToObject($result);
            if(!in_array($result->$k,$temp_uids)){
                $temp_uids[]=$result->$k;
                $unique_results[]= $result ;
            }
        }
        $item = $unique_results;
        unset($temp_uids, $unique_results);
    }
}

if ( ! function_exists('super_unique'))
{
    function super_unique($array)
    {
        $result = array_map("unserialize", array_unique(array_map("serialize", $array)));

        foreach ($result as $key => $value)
        {
            if ( is_array($value) )
            {
                $result[$key] = super_unique($value);
            }
        }

        return $result;
    }
}
