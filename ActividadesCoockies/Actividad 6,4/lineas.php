<?php 
    include "config/autocharge.php";
    include "config/functions.php";
    $base = new BaseDeDatos();
    session_start();
    if(isset($_POST["botonidPedido"])){
        $idPedido = $_POST['idPedido'];
        $fecha = $_POST['fecha'];
        $dni = $_POST['Clientes'];
        $pedido = new Pedido($idPedido,$fecha,$dni);
        $pedido->save();
        $idPedido = $pedido->idPedido;
    }else{
        $idPedido = $_SESSION['idPedido']; 
        if (isset($_POST['boton'])) {
        $linea = new LineaPedido($idPedido,$_POST['nlinea'],$_POST['Productos'],$_POST['cantidad']);
        if(isset($_SESSION['lineas'])){
            $linea->save();
        }else{
            $_SESSION['lineas']=[];
            $linea->save();
        }
    }
}
    include'views/lineasview.php';
