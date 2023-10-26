<?php
class LineaPedido{
    private $idPedido;
    private $nlinea;
    private $idProducto;
    private $cantidad;
    public function __construct($idPedido,$nlinea,$idProducto,$cantidad){
        $this->idPedido = $idPedido;
        $this->nlinea = $nlinea;
        $this->idProducto = $idProducto;
        $this->cantidad = $cantidad;
    }
    public function insertLinea($link){
            $query = "INSERT INTO lineaspedidos(idPedido,nlinea,idProducto,cantidad) VALUES(:id,:nlinea,:idProducto,:cantidad)";
            $ptstm = $link->prepare($query);
            $ptstm->bindParam(":id", $this->idPedido);
            $ptstm->bindParam(":nlinea", $this->nlinea);
            $ptstm->bindParam(":idProducto", $this->idProducto);
            $ptstm->bindParam(":cantidad", $this->cantidad);
            $ptstm->execute();
    }

    public function save(){
        $_SESSION['lineas'][$this->nlinea] = [$this->idPedido,$this->nlinea, $this->idProducto, $this->cantidad];
    }
    public function __get($name) {
        return $this->$name;
    }
}
?>