<?php

require('functions.php');

// require 'database/Connection.php';
// require 'database/QueryBuilder.php';

//this bootstrap file gives us a query builder to interact with our database
$query = require 'bootstrap.php';


// try {
//   $pdo = new PDO('mysql:host=127.0.0.1;dbname=todo', 'steven', 'here');
// } catch(PDOException $e) {
//   die($e->getMessage());
// }

// $pdo = connectToDb();
// $data = $pdo->prepare('select * from todos');
// $data->execute();
// $tasks = $data->fetchAll(PDO::FETCH_CLASS, 'Task');
// $tasks = fetchAllTasks($pdo);

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo); 




$tasks = $query->selectAll('todos');

// $tasks = array_map(function ($task) {
//   return $task->description;
// }, $tasks);

dd($tasks);

require 'index.view.php';
