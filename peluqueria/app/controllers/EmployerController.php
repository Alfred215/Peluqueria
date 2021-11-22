<?php

namespace App\Controllers;

use App\Models\Trabajador;

require_once "app/models/Trabajador.php";

class EmployerController
{

    function __construct()
    {
        //echo "En UserController";
    }

    public function trabajador()
    {
        $trab = Trabajador::all();
        require "app/views/employer/index.php";
    }

    public function guardarTrabajador(){
        $trabajor= new Trabajador();
        $trabajor->nombre = $_POST['nombre_trab'];
        $trabajor->apellidos = $_POST['apellidos_trab'];
        $trabajor->dni = $_POST['dni_trab'];
        $trabajor->correo = $_POST['correo_trab'];
        $trabajor->telefono = $_POST['telefono_trab'];
        $trabajor->categoria = $_POST['cat_trab'];
        $trabajor->insert();
        $trab = Trabajador::all();
        require "app/views/employer/index.php";      
    }
}
