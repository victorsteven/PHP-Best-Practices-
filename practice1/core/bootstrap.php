<?php

$config = require 'config.php';

// require 'functions.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


// dd($config);

//using dependency injection here:
return new QueryBuilder(Connection::make($config['database']));