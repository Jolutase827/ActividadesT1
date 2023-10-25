<?php
class Productos{
    public static function getAll($link){
        $query = "SELECT idProducto,nombre FROM productos";
        $ptstm = $link->prepare($query);
        $ptstm->execute();
        return $ptstm;
    }
}

?>