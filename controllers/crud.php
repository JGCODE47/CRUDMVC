<?php 


class tareas{
    public static function crearTareaCtr($date){
        $table="tareas";
        $create = tareaMdl::crearTareaMdl($table, $date);
        return $create;
    }

    public static function leerTareaCtr(){
        $table="tareas";
        $read = tareaMdl::leerTareaMdl($table);
        return $read;
    }


    public static function actualizarTareaCtr($date){
        $table="tareas";
        $update = tareaMdl::actualizarTareaMdl($table, $date);
        return $update;

    }

    public static function eliminarTareaCtr(){
        $table="tareas";
        $delete = tareaMdl::eliminarTareaMdl($table, $date);
        return $delete;
    }
}