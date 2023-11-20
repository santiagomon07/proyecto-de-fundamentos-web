<?php
require_once("model/index.php");
require_once("./model/formularioModel.php");

class modeloController{
    private $model;
    private $formulario;
    public function __construct(){
        $this->model = new Modelo();
        $this->formulario = new Formulario();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("encuesta","1");
        require_once("view/index.php");
    }
        //nuevo
        static function nuevo(){        
            require_once("view/formularioView.php");
        }
        //guardar
        static function guardar(){
        
            $nombre = $_REQUEST['nombre'];
            $telefono = $_REQUEST['telefono'];
            $email= $_REQUEST['email'];
            $calificacion = $_REQUEST['calificacion'];
            $personaje = $_REQUEST['personaje'];
            $recomienda = $_REQUEST['recomienda'];
            $data = "'".$nombre."','".$telefono."','".$email."','".$calificacion."','".$personaje."','".$recomienda."'";
    
    
            $encuesta = new Formulario();
            $dato = $encuesta->insertar("encuesta",$data);
            
            header("location:./");
        }
    
        //editar
        static function editar(){    
            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->mostrar("encuesta","encuesta_id=".$id);        
            require_once("view/editar.php");
        }
        //actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $telefono = $_REQUEST['telefono'];
            $email= $_REQUEST['email'];
            $calificacion = $_REQUEST['calificacion'];
            $personaje = $_REQUEST['personaje'];
            $recomienda = $_REQUEST['recomienda'];
            $data = "nombre='".$nombre."', telefono='".$telefono."', email='".$email."', calificacion='".$calificacion."', personaje='".$personaje."', recomienda='".$recomienda."'";
            $producto = new Modelo();
            $dato = $producto->actualizar("encuesta",$data,"encuesta_id=".$id);
            header("location:index.php");
        }
    
    
        //eliminar
        static function eliminar(){    
            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->eliminar("encuesta","encuesta_id=".$id);
            header("location:index.php ");
        }
}