<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Products";

$route['products/create'] = "/products/create";

$route['products/delete/(:num)'] = "/products/delete/$1";

$route['404_override'] = '';