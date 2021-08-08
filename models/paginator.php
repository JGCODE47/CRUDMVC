<?php 

class rutesMdl{
    public static function rutesFrontendMdl($rutes){
        $rute = explode("/", $rutes);
        if($rute[0] == "index"){
            return "views/modules/inicio.php";
        }elseif($rute[0] == "crear"){        
            return "views/modules/crear.php";        
        }elseif($rute[0] == "ver"){        
            return "views/modules/ver.php";        
        }else{
            return "views/modules/404.php";
        }
    }
}