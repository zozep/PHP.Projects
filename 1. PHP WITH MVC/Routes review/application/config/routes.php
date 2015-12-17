<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'Products';

$route['p/(:any)'] = 'Products/show/$1';

$route['p/edit/(:any)'] = 'Products/edit/$1';

$route['register'] = 'Users/new_user';

$route['login'] = 'Sessions/new_session';

$route['logoff'] = 'Sessions/session_destroy';

$route['404_override'] = '';