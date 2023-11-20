<?php
require_once("./model/formularioModel.php");
class formularioController{
    private $formulario;
    public function __construct(){
        $this->formulario = new Formulario();
    }
    
    static function index(){        
        require_once("./view/formularioView.php");
    }

    static function guardar(){
        
        $nombre = $_REQUEST['nombre'];
        $telefono = $_REQUEST['telefono'];
        $email= $_REQUEST['email'];
        $calificacion = $_REQUEST['calificacion'];
        $personaje = $_REQUEST['personaje'];
        $recomienda = $_REQUEST['recomienda'];
        $data = "'".$nombre."','".$telefono."','".$email."','".$calificacion."','".$personaje."','".$recomienda."'";
                 // ejemplo en java --- > System.out.println("'ronal','tamayo','3116184030'");


        $encuesta = new Formulario();
        $dato = $encuesta->insertar("encuesta",$data);
        
        header("location:./");
    }


}