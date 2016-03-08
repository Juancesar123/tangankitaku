<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/halamanmuka';
$route['artikel'] = 'home/artikel';
$route['admin'] = 'home';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['forgot_password'] = 'auth/forgot_password';
$route['view_artikel'] = 'home/viewartikel';
$route['insert_artikel'] = 'home/insertartikel';
$route['hapus_artikel'] = 'home/hapusartikel';
$route['edit_artikel'] = 'home/editartikel';
$route['lihat_event'] = 'home/lihatevent';
$route['insert_event'] = 'home/insertevent';
$route['edit_event'] = 'home/editevent';
$route['hapus_event'] = 'home/hapusevent';
$route['aboutus'] = 'home/aboutus';
$route['ambil_edit'] = 'home/ambiledit';
$route['ambil_editor'] = 'home/ambileditor';
$route['insert_editor'] = 'home/inserteditor';
$route['edit_editor'] = 'home/editeditor';
$route['hapus_editor'] = 'home/hapuseditor';
$route['managementuser'] = 'home/managementuser';
$route['lihat_user'] = 'home/lihatuser';
$route['insert_user'] = 'home/insertuser';
$route['hapus_user'] = 'home/hapususer';
$route['slider'] = 'home/slider';
$route['lihat_slider'] = 'home/lihatslider';
$route['insert_slider'] = 'home/insertslider';
$route['edit_slider'] = 'home/editslider';
$route['hapus_slider'] = 'home/hapusslider';
$route['navbar'] = 'home/navbar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
