<?php

require 'vendor/autoload.php';

$query = require 'core/bootstrap.php';


// die(var_dump($app));


// $router = new Router();
// require 'routes.php';
// //remove trailing slashes in the beginning and the ending
// $uri =  (trim($_SERVER['REQUEST_URI'], '/'));
// require $router->direct($uri);


// $uri =  (trim($_SERVER['REQUEST_URI'], '/'));

// $router = Router::load('routes.php');
// require $router->direct($uri);

//the router load the file, we direct trafic to it, and we send it to wherever you require it to go
require  Router::load('routes.php')
          ->direct(Request::uri(), Request::method());