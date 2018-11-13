<?php defined('BASEPATH') OR exit('No direct script access allowed');


$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

$route['home'] = 'pages/home';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;