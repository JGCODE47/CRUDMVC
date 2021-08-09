<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    CREAR TAREA
                </div>
                <div class="card-body">
                    <p>
                    <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre tarea</label>
                        <input type="email" class="form-control" id="nombret" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Describa la tarea</label>
                        <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="descripciont"></textarea>
                    <label for="floatingTextarea">Descripcion</label>
                    </div>
                  
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha tarea</label>
                        <input type="date" class="form-control" id="fechat" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary" id="creartarea" idUser="<?php echo $_SESSION["id"];?>">Crear</button>
                    </form>                    
                </p>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="views/js/creartarea.js"></script>