<?php


// $router->define([
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-name.php',
// ]);

// $router->get('', 'controllers/index.php');
// $router->get('about', 'controllers/about.php');
// $router->get('about/culture', 'controllers/about-culture.php');
// $router->post('names', 'controllers/add-name.php');

// die(var_dump($router->routes));

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

