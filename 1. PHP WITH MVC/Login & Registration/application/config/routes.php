<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Users";

// 1. Route to render the register form
$route['users/new'] = "Users/new_user";

// 2. Route to render the log in form
$route['sessions/new'] = "Sessions/new_session";

// 3. Route to do the actual registration
$route['users/create'] = "Users/create";

// 4. Route to do th eactual log in
$route['sessions/create'] = "Sessions/create";

$route['success'] = "Sessions/success";

$route['404_override'] = '';