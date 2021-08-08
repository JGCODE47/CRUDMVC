<?php 
include '../controllers/crud.php';
include '../models/crud.php';
class ajaxTarea{
    public static function ajaxCrearTarea(){
        $date = array("nombre"=>$_POST["nombre"], "descripcion"=>$_POST["descripcion"], "fecha"=>$_POST["fecha"]);
        $create = tareas::crearTareaCtr($date);
        return json_encode($create);
    }
}

$e = ajaxTarea::ajaxCrearTarea();

echo $e;