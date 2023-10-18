<?php 
 include "clases/Producto.php";

include "vistas/inicio.html";

if(isset($_POST['mandarDatos'])){
    $producto1 = new Producto($_POST['peso'],$_POST['precio'],$_POST['stock']);
    echo $producto1;
    echo '<a href="controlador.php">Volver al formulario</a>';
}else{
    include "vistas/formulario.html";
}

include "vistas/fin.html";
?>