<?php

$query = require 'core/bootstrap.php';


// $router = new Router();
// require 'routes.php';
// //remove trailing slashes in the beginning and the ending
// $uri =  (trim($_SERVER['REQUEST_URI'], '/'));
// require $router->direct($uri);


// $uri =  (trim($_SERVER['REQUEST_URI'], '/'));

// $router = Router::load('routes.php');
// require $router->direct($uri);

require  Router::load('routes.php')->direct(Request::uri());