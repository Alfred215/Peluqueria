<?php

namespace App\Controllers;

use App\Models\Consulta;
use App\Models\Trabajador;

require_once "app/models/Consulta.php";

class ConsultaController
{

    function __construct()
    {
        //echo "En UserController";
    }

    public function trabajador()
    {
        $trab = Trabajador::all();
        require "app/views/users/employer.php";
    }

    public function guardarTrabajador(){
        $trabajor= new Trabajador();
        $trabajor->nombre = $_POST['nombre_trab'];
        $trabajor->apellidos = $_POST['apellidos_trab'];
        $trabajor->dni = $_POST['dni_trab'];
        $trabajor->cuenta = $_POST['cuenta_trab'];
        $trabajor->correo = $_POST['correo_trab'];
        $trabajor->ss = $_POST['ss_trab'];
        $trabajor->telefono = $_POST['telefono_trab'];
        $trabajor->direccion = $_POST['direccion_trab'];
        $trabajor->salario = $_POST['salario_trab'];
        $trabajor->fecha = $_POST['fecha_trab'];
        $trabajor->categoria = $_POST['cat_trab'];
        $trab = Trabajador::all();
        require "app/views/users/employer.php";       
    }

    public function pregunta()
    {
        $pregs = Consulta::all();
        require "app/views/users/question.php";
    }

    public function guardarPregunta(){
        
        $consulta= new Consulta();
        $consulta->nombre=$_POST['nombre'];
        $consulta->apellidos = $_POST['apellidos'];
        $consulta->correo = $_POST['correo'];
        $consulta->asunto = $_POST['asunto'];
        $consulta->mensaje = $_POST['mensaje'];
        $consulta->insert();
        $pregs = Consulta::all();
        require "app/views/users/question.php";
    }
}
