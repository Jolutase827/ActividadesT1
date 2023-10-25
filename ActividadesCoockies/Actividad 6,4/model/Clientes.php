<?php
class Clientes{
    public static function getAll($link){
        $query = "SELECT dniCliente, nombre FROM clientes";
        $pstmt = $link->prepare($query);
        $pstmt->execute();
        return $pstmt;
    }
} 



?>