<?php 
    include_once 'conexion.php';
    class ComprobarLogin extends Conexion{
        public static function LoginMdl($table, $date){
            $log = Conexion::Conectar()->prepare("SELECT * FROM $table WHERE user=:user AND pass = :pass");
            $log->bindParam(":user", $date["user"], PDO::PARAM_STR); 
            $log->bindParam(":pass", $date["pass"], PDO::PARAM_STR); 
            $log->execute();
            return $log->fetchAll();
            $log->null;      
        }
      


    }