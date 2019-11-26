<?php

class Task
{
  public $description;
  public $completed = false;

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$task = new Task('Learn OOP');
$task2 = new Task('Learn OOG');

var_dump($task->complete);
