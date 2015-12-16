<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['hello'] = 'main/hello/$1/$2';
$route['404_override'] = '';