<?php

class App
{
  public function run()
  {
    session_start();
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'formulario';
    }
  
    $this->$method();      
  }

  public function formulario(){
      include("views/formulario.php");
  }

  public function guardar(){
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $correo=$_POST['correo'];
        $asunto=$_POST['asunto'];
        $mensaje=$_POST['mensaje'];
        $_SESSION['nombre']=$nombre;
        $_SESSION['apellidos']=$apellidos;
        $_SESSION['correo']=$correo;
        $_SESSION['asunto']=$asunto;
        $_SESSION['mensaje']=$mensaje;
        include("views/mostrar.php");
  }
}