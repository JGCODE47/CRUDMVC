<?php 
class LoginCtr{         

    public static function ComprobarLoginCtr(){ 
        if($_POST["user"]){
            $table = "usuarios"; 
            $user = $_POST["user"]; 
            $pass = md5($_POST["pass"]);
            $date = array("user"=>$user, "pass"=>$pass,);
            $vali =  ComprobarLogin::LoginMdl($table, $date);
            foreach($vali as $row => $count){
            $_SESSION["validar"]="on";
            $_SESSION["id"]=$count["id_usuario"];
            $_SESSION["user"]=$count["user"];
            header('Location: ver');exit();

            }
          
            
           
           
            
        }
      
    }                  
 



      
 
}
