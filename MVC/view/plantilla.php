<?php
session_start();
$rutas = array();
$ruta = "";
if(isset($_GET["ruta"])){
    $rutas = explode("/", $_GET["ruta"]);
    $ruta =$rutas[0];
}else{
    $ruta = "inicio";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_ENV["url"];?>view\assets\style.css">

    <!-- iconos -->
    <link rel="stylesheet"
        href="<?php echo $_ENV["url"];?>view/assets/src/themify-icons/assets/themify-icons/themify-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-secundary">

    <?php 
include "modulos/navbar.php";
?>
    <div class="container-fluid" style="background: url('<?php echo $_ENV["url"];?>view/assets/src/img/fondo6.jpg ">

        <?php
    if($ruta=="inicio" ){
        include "modulos/inicio.php";
    }else{
        if($ruta=="productos" || $ruta=="contactenos" || $ruta=="servicio" || $ruta=="cerrar" || $ruta=="registro" ){
            include "modulos/".$ruta.".php";
        }else{
             echo "error 404";
    }
}
   ?>
    </div>
    <?php 
include "modulos/footer.php";
?>

    <input type="hidden" name="url" id="url" value="<?php echo $_ENV['url'];?>">


    <script src="<?php echo $_ENV["url"];?>view\assets\js\animacion.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="<?php echo $_ENV["url"];?>view\assets\js\waypoint.js"></script>
    <script src="<?php echo $_ENV["url"];?>view\assets\js\jquery.counterup.min.js"></script>

    <script>
    $('.count').counterUp({
        delay: 10,
        time: 1000
    });
    </script>


</body>

</html>