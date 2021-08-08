<?php 

    class templaterCtr{
        public static function templaterFrontendCtr(){
            $templater = templaterMdl::templaterFrontendMdl();
            return $templater;
        }

        public static function paginatorTemplaterCtr(){
            if(isset($_GET["ruta"])){
                $rutes= $_GET["ruta"];

            }else{
                $rutes="index";
            }

            $rute = rutesMdl::rutesFrontendMdl($rutes);
           
            include_once $rute; 
        }
    }