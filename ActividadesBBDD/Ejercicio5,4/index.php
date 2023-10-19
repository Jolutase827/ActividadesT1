<?php 
require "model.php";
$base = new Base();
if(isset($_POST["button"])) {
    $pedido = new Pedido($_POST["idPedido"],$_POST['fecha'],$_POST["cliente"]);
    if($pedido->isPedido($base->link)){
        $pedido->addLinea($base->link,$_POST["producto"],$_POST['cantidad']);
        echo "Se ha añadido la line con exito";
    }else{
        $pedido->createPedido($base->link);
        $pedido->addLinea($base->link,$_POST["producto"],$_POST['cantidad']);
        echo "Se ha añadido la linea y el pedido con exito";
    }
} else {
    require "views/viewForm.php";
}



?>