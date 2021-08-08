<?php 
    include_once 'conexion.php';
    class tareaMdl extends Conexion{
        public static function crearTareaMdl($table, $date){
            $create = Conexion::Conectar()->prepare("INSERT INTO $table (nombre, descripcion, fecha) VALUE (:nombre, :descripcion, :fecha)");
            $create->bindParam(":nombre", $date["nombre"], PDO::PARAM_STR); 
            $create->bindParam(":descripcion", $date["descripcion"], PDO::PARAM_STR); 
            $create->bindParam(":fecha", $date["fecha"], PDO::PARAM_STR); 
            $create->execute();
            return "ok";
            $create->null;

        }
        public static function leerTareaMdl($table){
            $read = Conexion::Conectar()->prepare("SELECT * FROM $table");
            $read->execute();
            return $read->fetchAll();
            $read->null;

        }
        public static function actualizarTareaMdl($table, $date){
            $update = Conexion::Conectar()->prepare("UPDATE $table SET nombre=:nombre,descripcion=:descripcion, fecha=:fecha WHERE id = :id");
            $update->bindParam(":nombre", $date["nombre"], PDO::PARAM_STR); 
            $update->bindParam(":descripcion", $date["descripcion"], PDO::PARAM_STR); 
            $update->bindParam(":fecha", $date["fecha"], PDO::PARAM_STR); 
            $update->bindParam(":id", $date["id"], PDO::PARAM_INT); 
            $update->execute();
            return "ok";
            $update->null;
        }
        public static function eliminarTareaMdl($table, $date){
            $delete = Conexion::Conectar()->prepare("DELETE FROM $tarea WHERE id_tarea = '$date'");
            $delete->execute();
            return "ok";
            $delete->null;
        }
    }