<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Authentication
$routes->get('login', 'Auth::login');
$routes->get('logout','Auth::logout');
$routes->post('auth/processLogin', 'Auth::processLogin');

// Students
$routes->get('student/home', 'Home::student');
$routes->get('student/enroll','Courses::enroll');
$routes->get('student/enroll/processEnroll/(:segment)','Courses::enrollProcess/$1');

// Admin
$routes->get('admin/dashboard','Admins::admin');
$routes->get('admin/mahasiswa','Admins::students');
$routes->get('admin/','Admins::admin');
$routes->get('admin/courses','Admins::Courses');
$routes->get('admin/addCourse','Admins::add_course');
$routes->post('admin/saveCourse','Admins::save_course');
$routes->get('admin/editCourse/(:segment)','Admins::edit_course/$1');
$routes->post('admin/updateCourse/(:segment)','Admins::update_course/$1');
$routes->post('admin/deleteCourse/(:num)','Admins::delete_course/$1');
$routes->get('admin/addStudent','Admins::add_student');
$routes->post('admin/save_student','Admins::save_student');
$routes->get('admin/editStudent/(:segment)','Admins::edit_student/$1');
$routes->post('admin/update_student', 'Admins::update_student');
$routes->post('admin/deleteStudent/(:num)','Admins::delete_student/$1');


