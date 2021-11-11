<?php

class App
{
  function __construct()
  {
    if (isset($_GET['name']) && !empty($_GET['name'])) {
      $controllerName = $_GET['name'];
    } else {
      $controllerName = 'home';
    }

    $controllerName = ucwords($controllerName) . "Controller";

    if (isset($_GET['method']) && !empty($_GET['method'])) {
      $controllerName = $_GET['method'];
    } else {
      $controllerName = 'index';
    }


    $file = "app/controllers/$controllerName" . ".php";
    if (file_exists($file)) {
      require_once $file;
    } else {
      header("HTTP/1.0 404 Not Found");
      die();
    }

    $controllerObject = new $controllerName;
    if (method_exists($controllerName, $method)) {
      $controllerObject->$method($arguments);
    } else {
      header("HTTP/1.0 404 Not Found");
      echo "No encontrado";
      die();
    }
  }
}