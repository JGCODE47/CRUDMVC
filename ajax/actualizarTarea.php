<?php 
include '../controllers/crud.php';
include '../models/crud.php';
class ajaxTarea{
    public static function ajaxupdateTarea(){
        $date = array("nombre"=>$_POST["nombre"], "descripcion"=>$_POST["descripcion"], 
                      "fecha"=>$_POST["fecha"], "id_tarea"=>$_POST["id_tarea"]);
        $create = tareas::actualizarTareaCtr($date);
        return json_encode($create);
    }
}

$e = ajaxTarea::ajaxupdateTarea();

echo $e;