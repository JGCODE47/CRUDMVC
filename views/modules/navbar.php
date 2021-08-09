<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="idU" idUser="<?php echo $_SESSION["id"];?>"><?php 
    if(isset($_SESSION["user"])){
      echo "@".$_SESSION["user"];
      }else{
        echo "Iniciar sesión";        
        }?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php 


if(isset($_SESSION["validar"]) == "on"){
echo '<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  Tareas
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  <li><a class="dropdown-item" href="crear">Crear</a></li>
  <li><a class="dropdown-item" href="ver">Ver</a></li>
  
</ul>
</li>';
}

?>
    

    
      </ul>
      <?php 
        if(isset($_SESSION["validar"])=="on"){
          echo '<a href="salir" class="d-flex">SALIR</a>';
        }
      
      
      
      ?>
    </div>
  </div>
</nav>
