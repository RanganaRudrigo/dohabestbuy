<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/home';
$route['Contact-us'] = 'home/contact';
$route['About-us'] = 'home/about';
$route['Services'] = 'home/services';