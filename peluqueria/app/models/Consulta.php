<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Consulta extends Model{

    public function all(){
        $db = Consulta::db();
        $sql = "SELECT * FROM consulta";
        $statement = $db->query($sql);
        $pregs = $statement->fetchAll(PDO::FETCH_CLASS, Consulta::class);
        return $pregs;
    }

    public function find(){
        
    }

    public function insert(){
        $consulta=Consulta::db();
        $cnslt = $consulta->prepare('INSERT INTO consulta(nombre, apellidos, correo, asunto, mensaje) VALUES(:nombre, :apellidos, :correo, :asunto, :mensaje)');
        $cnslt->bindValue(':nombre', $this->nombre);
        $cnslt->bindValue(':apellidos', $this->apellidos);
        $cnslt->bindValue(':correo', $this->correo);
        $cnslt->bindValue(':asunto', $this->asunto);
        $cnslt->bindValue(':mensaje', $this->mensaje);
        return $cnslt->execute();
    }

    public function save(){
        
    }

    public function delete(){
        
    }
}