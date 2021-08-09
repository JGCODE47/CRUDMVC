<?php 
    include_once 'conexion.php';
    class tareaMdl extends Conexion{
        public static function crearTareaMdl($table, $date){
            $create = Conexion::Conectar()->prepare("INSERT INTO $table (nombre, descripcion, fecha, id_usuario) VALUE (:nombre, :descripcion, :fecha, :idUser)");
            $create->bindParam(":nombre", $date["nombre"], PDO::PARAM_STR); 
            $create->bindParam(":descripcion", $date["descripcion"], PDO::PARAM_STR); 
            $create->bindParam(":fecha", $date["fecha"], PDO::PARAM_STR); 
            $create->bindParam(":idUser", $date["idUser"], PDO::PARAM_STR); 
            $create->execute();
            return "ok";
            $create->null;

        }
        public static function leerTareaMdl($table, $id){
            $read = Conexion::Conectar()->prepare("SELECT * FROM $table WHERE id_usuario='$id'");
            $read->execute();
            return $read->fetchAll();
            $read->null;

        }
        public static function actualizarTareaMdl($table, $date){
            $update = Conexion::Conectar()->prepare("UPDATE $table SET nombre=:nombre,descripcion=:descripcion, fecha=:fecha WHERE id_tareas = :id");
            $update->bindParam(":nombre", $date["nombre"], PDO::PARAM_STR); 
            $update->bindParam(":descripcion", $date["descripcion"], PDO::PARAM_STR); 
            $update->bindParam(":fecha", $date["fecha"], PDO::PARAM_STR); 
            $update->bindParam(":id", $date["id_tarea"], PDO::PARAM_INT); 
            $update->execute();
            return "ok";
            $update->null;
        }
        public static function eliminarTareaMdl($table, $date){
            $delete = Conexion::Conectar()->prepare("DELETE FROM $table WHERE id_tareas = '$date'");
            $delete->execute();
            return "ok";
            $delete->null;
        }
    }