<?php

class ConsultaController
{

    function __construct()
    {
        //echo "En UserController";
    }

    public function trabajador()
    {
        $_SESSION['nombre_trab'] = $_POST['nombre_trab'];
        $_SESSION['apellidos_trab'] = $_POST['apellidos_trab'];
        $_SESSION['dni_trab'] = $_POST['dni_trab'];
        $_SESSION['cuenta_trab'] = $_POST['cuenta_trab'];
        $_SESSION['correo_trab'] = $_POST['correo_trab'];
        $_SESSION['ss_trab'] = $_POST['ss_trab'];
        $_SESSION['telefono_trab'] = $_POST['telefono_trab'];
        $_SESSION['direccion_trab'] = $_POST['direccion_trab'];
        $_SESSION['salario_trab'] = $_POST['salario_trab'];
        $_SESSION['fecha_trab'] = $_POST['fecha_trab'];
        $_SESSION['cat_trab'] = $_POST['cat_trab'];
        require "app/views/mostrar_trabajador.php";
    }

    public function pregunta()
    {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['apellidos'] = $_POST['apellidos'];
        $_SESSION['correo'] = $_POST['correo'];
        $_SESSION['asunto'] = $_POST['asunto'];
        $_SESSION['mensaje'] = $_POST['mensaje'];
        require "app/views/mostrar.php";
    }
}
