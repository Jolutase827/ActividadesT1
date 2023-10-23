<?php
 class Base{
    private $link;

    function __construct(){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        );
        $this->link = new PDO("mysql:host=localhost:3307;dbname=virtualmarket",'root','',$options);
    }
    function __get($name){
        return $this->$name;
    }
 }

class Pedido {
    private $idPedido;
    private $fecha;

    function __construct($idPedido,$fecha){
        $this->idPedido = $idPedido;
        $this->fecha = $fecha;
    }
    function __get($name){
        return $this->$name;
    }
}
class LineaPedido {
    private $nombreProducto;
    private $cantidad;
    private $precio;
    private $importe;

    function __construct($nombreProducto,$cantidad,$precio,$importe){
        $this->nombreProducto = $nombreProducto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->importe = $importe;
    }
    function __get($name){
        return $this->$name;
    }
}



?>