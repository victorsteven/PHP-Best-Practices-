<?php

// $names = ['steven', 'Arne', 'Mongo'];

$person = [
  'age' => '100',
  'hair' => 'black',
  'career' => 'Software developer',
  'professional' => true
];

$person['name'] = ' Steven';

unset($person['age']);

// die(var_dump($person));

// function dd($array){
//   die(var_dump($array));
// }

// dd($person);




require 'index_old.view.php';

