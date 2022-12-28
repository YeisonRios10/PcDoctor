<?php 
if (isset($_POST['usuario'])) {

usuarioController::crear_persona();
}else{
 
?>

<div class="container mt-5 pt-5">
    <div class="card w-50 bg-dark text-success mt-3 border border-warning mx-auto  d-block p-5 ">
        <div class="display-4 text-center">crear tu usuario</div>
        <br>
        <form method="POST">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Usuario</label>
                    <input type="texto" class="form-control" name="usuario" id="inputEmail4">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena" id="inputPassword4">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">registrarse</button>

                </div>
            </div>

        </form>
    </div>


</div>

<?php }
?>