<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "/products";

$route['products/(:num)'] = "/products/show/$1";

$route['products/new'] = "/products/new_product";

$route['products/edit'] = "/products/edit/$1";

$route['products/update'] = "/products/update/$1";

$route['404_override'] = '';