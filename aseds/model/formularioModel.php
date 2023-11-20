<?php

class Formulario{
    private $Modelo;
    private $db;    
    private $datos;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=login_register_db',"root","");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla."(nombre, telefono, email, calificacion, personaje, recomienda) values(". $data .")";
        echo $consulta;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }

}