<?php 
    ob_start();

    include_once 'controllers/templater.php'; 
    include_once 'controllers/crud.php'; 
    include_once 'controllers/login.php'; 
    include_once 'controllers/url.php'; 


    include_once 'models/templater.php';
    include_once 'models/login.php';
    include_once 'models/crud.php';
    include_once 'models/paginator.php';
    include_once 'models/url.php';



    $templater = new templaterCtr(); 
    $templater->templaterFrontendCtr(); 
    
    




