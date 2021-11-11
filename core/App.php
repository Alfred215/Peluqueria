<?php

class App
{
  function __construct()
    {
        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

         echo "App - Url: $url <br>";
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

  

  
  /*  
  public function formulario(){
      include("../app/controllers/formularioController.php?method=index");
  }

  public function guardar_datos(){
    $_SESSION['nombre_trab']=$_POST['nombre'];
    $_SESSION['apellidos_trab']=$_POST['apellidos'];
    $_SESSION['dni_trab']=$_POST['dni'];
    $_SESSION['cuenta_trab']=$_POST['cuenta'];
    $_SESSION['correo_trab']=$_POST['correo'];
    $_SESSION['ss_trab']=$_POST['ss'];
    $_SESSION['telefono_trab']=$_POST['telefono'];
    $_SESSION['direccion_trab']=$_POST['direccion'];
    $_SESSION['salario_trab']=$_POST['salario'];
    $_SESSION['fecha_trab']=$_POST['fecha'];
    $_SESSION['cat_trab']=$_POST['cat'];  
  } 

  public function guardar_consulta(){
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['apellidos']=$_POST['apellidos'];
    $_SESSION['correo']=$_POST['correo'];
    $_SESSION['asunto']=$_POST['asunto'];
    $_SESSION['mensaje']=$_POST['mensaje'];
    include("views/mostrar.php");
  }
  */
}