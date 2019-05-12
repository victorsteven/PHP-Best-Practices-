<?php

// require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';

// dd($config);

//using dependency injection here:
return new QueryBuilder(Connection::make($config['database']));