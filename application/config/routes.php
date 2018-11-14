<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['forgot'] = 'auth/forgot';
$route['logout'] = 'auth/logout';
$route['home'] = 'pages/home';

$route['default_controller'] = 'pages/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;