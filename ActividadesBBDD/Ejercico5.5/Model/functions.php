<?php
function getAllLineas($link){
    try{
        $query = ("SELECT p.idPedido as id, p.fecha as fecha, l.idProducto as idProducto,l.cantidad as cantidad FROM pedidos p LEFT JOIN lineaspedidos l ON p.idPedido=l.idPedido;");
        $pstm = $link->prepare($query);
        $pstm->execute();
        return $pstm;
    }catch(PDOException $e){
        echo $e->getMessage();
    }   
}
function getProductos($link){
    try{
    $array = [];
    $query = "SELECT idProducto, nombre, precio FROM productos";
    $pstm = $link->prepare($query);
    $pstm->execute();
    while($row = $pstm->fetch(PDO::FETCH_ASSOC)){
        $array[$row["idProducto"]] = [$row["nombre"],$row["precio"]];
    }
    return $array;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function createTable($link) {
    $result = getAllLineas($link);
    $products = getProductos($link);
    $idPedido =0;
    echo"<table>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        if($row["id"] != $idPedido){
            echo "<tr>
                <td>
                ".$row['id']."
                </td>
                <td>
                ".$row['fecha']."
                </td>
                <td></td>
                <td></td>
                <td><a href='View/addLinea.php?idPedido=".$row['id']."'>Añadir lineas</a></td>
            </tr>";
            $idPedido = $row["id"];
        }
        if(isset($row['cantidad'])){
        echo "<tr>
        <td></td>
        <td>
        ".$products[$row['idProducto']][0]."
        </td>
        <td>".$row['cantidad']."</td>
        <td>".$products[$row['idProducto']][1]."</td>
        <td>".$products[$row['idProducto']][1]*$row['cantidad']."</td>
    </tr>";
        }
    }
    echo "<tr><td><a href='View/createPedido.php'>Añadir Pedido</td></tr>
    </table>";
}

?>