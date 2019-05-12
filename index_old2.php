<?php

require('functions.php');

class Task  {

  protected $description;

  public $completed = false;

  public function __construct($description) {
    $this->description = $description;
  }

  public function complete(){
    $this->completed = true;
  }

  public function isComplete() {
    return $this->completed;
  }

  public function description() {
    return $this->description;
  }
}

$task = new Task('GO to the store');

$task->complete();

// echo $task;
// dd($task);
// dd($task->isComplete());

$tasks = [
    new Task('Eat mango'),
    new Task('Eat Banana'),
    new Task('Eat Guava'),

];

$tasks[0]->complete();

// dd($tasks);

//since description is protected, we cannt access it directly
// dd($task->description);

require('index_old2.view.php');