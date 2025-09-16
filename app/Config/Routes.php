<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('login', 'Auth::login');
$routes->get('logout','Auth::logout');
$routes->post('auth/processLogin', 'Auth::processLogin');

// Student routes (hanya student)
$routes->group('student', ['filter' => 'auth:student'], function($routes){
    $routes->get('home', 'Home::student');
    $routes->get('enroll','Courses::enroll');
    $routes->get('enroll/processEnroll/(:segment)','Courses::enrollProcess/$1');
});

// Admin routes (hanya admin)
$routes->group('admin', ['filter' => 'auth:atmint'], function($routes){
    $routes->get('home','Admins::admin');
    $routes->get('mahasiswa','Admins::students');
    $routes->get('courses','Admins::Courses');
    $routes->get('addCourse','Admins::add_course');
    $routes->post('saveCourse','Admins::save_course');
    $routes->get('editCourse/(:segment)','Admins::edit_course/$1');
    $routes->post('updateCourse/(:segment)','Admins::update_course/$1');
    $routes->post('deleteCourse/(:num)','Admins::delete_course/$1');
    $routes->get('addStudent','Admins::add_student');
    $routes->post('save_student','Admins::save_student');
    $routes->get('editStudent/(:segment)','Admins::edit_student/$1');
    $routes->post('update_student', 'Admins::update_student');
    $routes->post('deleteStudent/(:num)','Admins::delete_student/$1');
});

