<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "/products";

$route['products/(:num)'] = "/products/show/$1";

$route['products/new'] = "/products/new_product";

$route['404_override'] = '';