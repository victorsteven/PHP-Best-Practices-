<?php

//find the config.php file, get the value and store it in the config key in our container:
App::bind('config', require 'config.php');

// die(var_dump(App::get('config')));

$config = App::get('config');


App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

// $app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

// $app = [];
// $app['config'] = require 'config.php';
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// //using dependency injection here:
// // return new QueryBuilder(Connection::make($config['database']));
// $app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
