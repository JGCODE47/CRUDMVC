<?php 

    class Conexion{
        public static function Conectar(){
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=tareas', 'root', '');
                return $conexion;
                $conexion = null;
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }

        }
    }