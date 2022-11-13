<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['el'] = 'el/home';
$route['el/(:any)'] = 'el/$1';
$route['ru'] = 'ru/home';
$route['ru/(:any)'] = 'ru/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
