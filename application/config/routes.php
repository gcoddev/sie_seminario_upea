<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth';
// $route['default_controller'] = 'Auth';
//$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//$route['sedeDDDdd'] = 'Controller_inscripcion';
//$route['inscripcion'] = 'Controller_inscripcion';
$route['validarCertificado'] = 'Controller_inscripcion/validacion_certificado';
$route['backend'] = 'backend/dashboard';
$route['sali'] = 'auth/logout';
$route['entro'] = 'auth/login';
$route['seminario/(:num)'] = 'Controller_inscripcion/detales_seminario1/$1';



require_once APPPATH . "/libraries/Hasher.php";
$route['sie/([a-zA-Z0-9]+)'] = function($hash){
	return Hasher::callController($hash);
};
