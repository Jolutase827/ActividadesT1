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
    public function insertLinea(){
    
    }
}

?>