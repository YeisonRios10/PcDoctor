<?php
if(isset($_POST['user'])){
    usuarioController::login();
}else{


?>


<div class="container mt-5 pt-5">
    <div class="card w-50 bg-dark text-success mt-3 border border-warning mx-auto  d-block p-5 ">
        <div class="display-4 text-center">inicio de sesión</div>
        <br>
        <form method="POST">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Usuario</label>
                    <input type="texto" class="form-control" name="user" id="inputEmail4">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" name="pass" id="inputPassword4">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">iniciar sesión</button>

                </div>
                <div class="col-6">
                    <a href="<?php echo $_ENV["url"];?>registro" class="btn btn-outline-success">registrarse</a>
                </div>
            </div>

        </form>
    </div>


</div>
<br>
<?php
}