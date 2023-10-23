<?php
session_start();
if (isset($_POST["boton"])){
    if($_POST['dni']=="1"&&$_POST["pwd"]=="1")
        $_SESSION["nombre"] = "PACO";
}
if (isset($_SESSION["nombre"])){
    echo"Se ha creado la sesión Paco";
}else{
    include"View/viewForm.php";
}
session_destroy();
?>