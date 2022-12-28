<?php 
if (isset($_POST['nombre'])) {

contactoController::crear_contacto();
}else{
 
?>



<div class="container mt-5 pt-5">
    <h3 class="text-center" style="color: white;">
        "Saber tus necesidades es muy importante para nosotros llena el siguiente formulario o contacta a un assesor en linea para conocer que piensas y que necesitas"
    </h3>
    <div class="card w-100 bg-dark text-success mt-3 border border-warning mx-auto  d-block p-5 ">
        <div class="display-4 text-center">inicio de sesión</div>
        <br>
    <form method="POST">
   
    <div class="container">
  <div class="form-row">
    
    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1">
      <label for="inputEmail4">Nombre</label>
      <input type="texto" class="form-control" name="nombre" placeholder="nombre" id="inputEmail4">
    </div>
    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@google.com">
  </div>
    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1">
      <label for="inputPassword4">teléfono</label>
      <input type="texto" class="form-control" name="telefono" placeholder="teléfono de contacto"id="inputPassword4">
    </div>
    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1">
      <label for="inputEmail4">Descripción </label>
      <input type="texto" class="form-control" name="descripcion" placeholder="Dinos en qué te podemos ayudar" id="inputEmail4">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
  </div>
 
</form>
    </div>
    
   
</div>
<br>

<div class="container d-flex justify-content-between">
<div class="card mb-3" style="width: 540px;  height: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $_ENV["url"];?>view\assets\src\img\brayan.jpeg" style="width: 150px; height: 250px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Brayan Camilo Arboleda</h5>
        <p class="card-text">correo arboledabrayan@gmail.com</p>
        <p>tel:  3105382648</p>
        <p class="card-text"><small class="text-muted">Last updated 1 hour ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="width: 540px;  height: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $_ENV["url"];?>view\assets\src\img\yeison.jpg" style="max-width: 180px; height: 250px;"  alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Yeison Rios Molina</h5>
        <p class="card-text">correo: stivenriosym15@gmail.com</p>
        <p>tel:  3105382648</p>
        <p class="card-text"><small class="text-muted">Last updated 2 hour ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container d-flex justify-content-between">
<div class="card mb-3" style="width: 540px;  height: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $_ENV["url"];?>view\assets\src\img\edwin.jpeg" style="width: 150px; height: 250px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 1 hour ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="width: 540px;  height: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $_ENV["url"];?>view\assets\src\img\felipe.jpg" style="width: 150px; height: 250px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 1 hour ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>

<?php
}
?>