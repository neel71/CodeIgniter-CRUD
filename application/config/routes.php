<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$route['default_controller'] = 'welcome';
//
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'neel';

$route['admin-panel'] = 'neel/dashboard';
$route['login-form'] = 'neel/login_form';
$route['add-student'] = 'neel/add_student';
$route['manage-student'] = 'neel/manage_student';
$route['add-admin'] = 'neel/add_admin';
$route['admin-save'] = 'neel/admin_save';
$route['logout'] = 'neel/logout';

$route['student/add'] = 'neel/student_add';//Post
$route['student-edit/(.+)'] = 'neel/student_edit/$1';
$route['student/update'] = 'neel/student_update';
$route['student-delete/(.+)'] = 'neel/student_delete/$1';//Post
