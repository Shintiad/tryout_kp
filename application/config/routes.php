<?php
defined('BASEPATH') || exit('No direct script access allowed');

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
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
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

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
// $route['users/waiting'] = 'users/waiting';
$route['users/waiting/(:num)'] = 'users/waiting/$1';
// $route['ujian/mulai/(:num)/(:num)'] = 'ujian/mulai/$1/$2';
$route['users/get_guru_options'] = 'users/get_guru_options';

$route['users/select_school'] = 'users/select_school';


// Authentication
// Route::any(LOGIN_URL, 'users/login', array('as' => 'login'));
// Route::any(REGISTER_URL, 'users/register', array('as' => 'register'));
// Route::block('users/login');
// Route::block('users/register');
$route['login'] = 'users/login';
$route['register'] = 'users/register';

Route::any('logout', 'users/logout');
Route::any('forgot_password', 'users/forgot_password');
Route::any('reset_password/(:any)/(:any)', 'users/reset_password/$1/$2');

// Activation
Route::any('activate', 'users/activate');
Route::any('activate/(:any)', 'users/activate/$1');
Route::any('resend_activation', 'users/resend_activation');


Route::any('pendaftar', 'pendaftar/daftar');


// Contexts
Route::prefix(SITE_AREA, function(){
    //Route::context('content', array('home' => SITE_AREA .'/content/index'));
    Route::context('master', array('home' => SITE_AREA .'/master/index'));
    Route::context('soal', array('home' => SITE_AREA .'/soal/index'));
    // Route::context('pengumuman', array('home' => SITE_AREA .'/pengumuman/index'));
    Route::context('ujian', array('home' => SITE_AREA .'/ujian/index'));
    Route::context('offline', array('home' => SITE_AREA .'/offline/index'));
    Route::context('user', array('home' => SITE_AREA .'/user/index'));
    Route::context('reports', array('home' => SITE_AREA .'/reports/index'));
    Route::context('report_ujian', array('home' => SITE_AREA .'/report_ujian/index'));
    Route::context('pembahasan', array('home' => SITE_AREA .'/pembahasan/index'));
    Route::context('grafik', array('home' => SITE_AREA .'/grafik/index'));
    Route::context('developer');
    Route::context('settings');
});

$route = Route::map($route);