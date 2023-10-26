<?php
class Pedido{
    private $idPedido;
    private $fecha;
    private $dniCliente;

    public function __construct($idPedido, $fecha, $dniCliente){  
        $this->idPedido = $idPedido;  
        $this->fecha = $fecha;
        $this->dniCliente = $dniCliente;
    }

    public function insertPedido($link){
        $query = "INSERT INTO pedidos(idPedido,fecha,dniCliente,dirEntrega) VALUES(?,?,?,'')";
        $ptstm = $link->prepare($query);
        $ptstm->bindParam(1, $this->idPedido);
        $ptstm->bindParam(2, $this->fecha);
        $ptstm->bindParam(3, $this->dniCliente);
        $ptstm->execute();
    }
    public function save(){
        $_SESSION['idPedido'] = $this->idPedido;
        $_SESSION['fecha'] = $this->fecha;
        $_SESSION['dniCliente'] = $this->dniCliente;
    }
    public function __get($name){
        return $this->$name;
    }
}

?>