<?php

function dd($array){
echo "<pre>";
  die(var_dump($array));
echo "</pre>";
}


// function connectToDb() {
//   try {
//     return new PDO('mysql:host=127.0.0.1;dbname=todo', 'steven', 'here');
//     // echo "connected";   
  
//   } catch(PDOException $e) {
//     die($e->getMessage());
//   }
// } 

// function fetchAllTasks($pdo) {
//   $data = $pdo->prepare('select * from todos');
//   $data->execute();
//   return $data->fetchAll(PDO::FETCH_CLASS, 'Task');
// }

