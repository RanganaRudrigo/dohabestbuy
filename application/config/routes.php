<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_page';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/home';
$route['Contact-us'] = 'home/contact';
$route['search'] = 'shop/search';
$route['About-us'] = 'home/about';
$route['Privacy-Policy'] = 'home/policy';
$route['Copyrights'] = 'home/Copyrights';
$route['Terms-and-Condition'] = 'home/terms';
$route['Warranty'] = 'home/Warranty';
$route['Quality'] = 'home/Quality';
$route['Security'] = 'home/Security';
$route['Delivery-Information'] = 'home/Delivery_Information';
$route['Buyer-Guide'] = 'home/Buyer_Guide';

$route['returns'] = 'home/returns';

$route['Services'] = 'home/services';
$route['blog'] = 'home/blog';
$route['blog/(:any)/(:num)'] = 'home/blog_detail/$2';
$route['Brands-and-Suppliers'] = 'home/blog';
$route['Brands-and-Suppliers/(:any)/(:num)'] = 'home/blog_detail/$2';
$route['spotlight'] = 'home/spotlight';
$route['spotlight/(:any)/(:num)'] = 'home/spotlight_detail/$2';


$route['shop/(:any)/(:num)'] = 'shop/mainMenu/$2'; // main menu product list
$route['shop/(:any)/(:num)/(:any)/(:num)'] = 'shop/subMenu/$2/$4'; // sub menu product list



$route['New-Arrival'] = 'shop/pro_list/1'; // view product detail view
$route['New-Arrival/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view

$route['top-deals'] = 'shop/pro_list/2'; // view product detail view
$route['top-deals/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view

$route['Buy-One-Get-One-Free'] = 'shop/pro_list/3'; // view product detail view
$route['Buy-One-Get-One-Free/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view

$route['Bundle-Offer'] = 'shop/pro_list/4'; // view product detail view
$route['Bundle-Offer/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view

$route['Below-100-QAR'] = 'shop/pro_list/5'; // view product detail view
$route['Below-100-QAR/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view

$route['popular-products/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view



$route['product_detail/(:any)/(:num)/(:any)/(:num)/(:any)/(:num)'] = 'shop/product/$6/$4/$2'; // view product detail view
$route['product_detail/(:any)/(:num)/(:any)/(:num)'] = 'shop/product/$4/0/$2'; // view product detail view
$route['product_detail/(:any)/(:num)'] = 'shop/product/$2/0/0'; // view product detail view

