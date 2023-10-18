<?php
class Producto{
    private $peso;
    private $precio;
    private $stock;
    
    function __construct($peso,$precio,$stock){
        $this->peso = $peso;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function __get($var){
        if (property_exists(__CLASS__, $var)){
            return $this->$var;
        }
        return NULL;
    }
    public function asignar(){
        return get_object_vars($this);
    }
    public function __toString(){
        return 'Peso: '.$this->peso.'. Precio: '.$this->precio.'. STOCK: '.$this->stock;
    }
}


?>