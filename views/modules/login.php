         

<div class="container">
    <div class="row">
        <div class="col-12 m-0 m-md-0 m-lg-auto py-5">
            <br>
            <br>
            <br>
            <div class="card m-auto" style="width:350px">
                             <div class="card-body">
                    <p class="card-text" id="login">
                    <form id="flogin" method="POST">
                    <input type="hidden" name="login" value="on">
                        <div class="form-group">
                            <label for="exampleInputEmail1">USUARIO</label>
                            <input name="user" id="user" type="text" class="form-control" required />
                           <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div id="alertaul"></div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CONTRASEÑA</label>
                            <input name="pass" id="pass" type="password" class="form-control" required />
                        </div>      
                        <br>                                                          
                        <button id="entrar" type="submit" class="btn btn-primary w-100">Entrar</button>
                    
                    </form>        
                        <?php 
                            if(isset($_POST["user"])){
                                $lg = new LoginCtr();
                            $lg->ComprobarLoginCtr();
                            }
                        
                        
                        
                        ?>
                  
                    
                </div>
                
            </div>
            
            
            
           
        </div>
    </div>
</div>

<script src="views/js/login.js"></script>





