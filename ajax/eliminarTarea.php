<?php 
include '../controllers/crud.php';
include '../models/crud.php';
class ajaxTarea{
    public static function ajaxVerTarea(){
        $ver = tareas::eliminarTareaCtr($_POST["id_tarea"]);
        return json_encode($ver);
    }
}

$e = ajaxTarea::ajaxVerTarea();

echo $e;