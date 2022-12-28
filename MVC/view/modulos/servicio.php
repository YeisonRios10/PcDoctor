<?php

if(isset($_SESSION['sesion']) && $_SESSION['sesion']){
?>
<br><br><br><br>
<p>modulo de servicio</p>


<?php
}else{

    include "login.php";
} 