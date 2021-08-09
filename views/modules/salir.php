<?php 

if(isset($_GET['ruta'])=="salir"){
    session_destroy();

	exit(header('Location: login'));


}