<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "/products";

$route['products/create/'] = "/products/create/$1";

$route['404_override'] = '';