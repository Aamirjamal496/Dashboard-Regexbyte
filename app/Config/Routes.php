<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Signup page routes:
$routes->get('/SignUp', 'LoginController::SignUp');
$routes->post('savedata', 'LoginController::savedata');
$routes->get('SignIn', 'LoginController::SignIn');
$routes->post('/checkUser','LoginController::checkUser');
$routes->get('dashboard', 'LoginController::dashboard');
// $routes->get('Categories', 'LoginController::categories');
$routes->post('saveCat','LoginController::saveCat');

$routes->get('/deleteCat/(:num)', 'LoginController::deleteCat/$1');
$routes->post('UpdateCategory','LoginController::UpdateCategory');
// Slider routes:

$routes->post('saveSlider','LoginController::saveSlider');
$routes->post('UpdateSlider','LoginController::UpdateSlider');
$routes->get('getSlider','LoginController::getSlider');
$routes->get('deleteSlide/(:num)','LoginController::deleteSlide/$1');

// Projects Routs:
$routes->get('/projects','LoginController::getCategories');
$routes->post('/savePr', "LoginController::saveProject");
$routes->get('/(:num)', "LoginController::deleteProject/$1");
$routes->post('search',"LoginController::searchProject");

// $routes->get('getCatD', "LoginController::getCatD");
// logoout route:
$routes->get('logout','LoginController::logout');

$routes->get('/category','LoginController::getCat');


?>