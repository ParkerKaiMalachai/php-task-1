<?php

function myAutoloader($className) {
  $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
  $fileName = __DIR__ . '/' . $className . '.php';
  if (file_exists($fileName)) {
    require $fileName;
  }
}

spl_autoload_register('myAutoloader');

require "tasks/first_task.php";
require "tasks/second_task.php";
require "tasks/third_task.php";

;