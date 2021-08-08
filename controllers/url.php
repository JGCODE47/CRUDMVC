<?php 

        class urlFrontendCtr{
            public static function obtenerUrlFrontendCtr(){
                $url = urlFrontend::urlFrontendMdl(); 
                return $url;
            }
        }