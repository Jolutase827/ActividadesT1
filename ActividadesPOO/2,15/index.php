<?php
include "CLASES/modelo.php";
if(isset($_POST['botonValor'])){
    $valor = $_POST['valor'];
    if($valor=='producto'){
        $producto = new Producto(22,21,12);
    }else if($valor=='monitor'){
        $producto = new Monitor(22,21,12,99);
    }else{
        $producto = new DiscoDuro(22,21,12,"120MB");
    }
    include "VISTAS/mostrar.php";
}else{
    include "VISTAS/formulario.php";
}

?>