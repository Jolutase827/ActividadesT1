<?php
    function createList($link,$class,$id){
        try{
            $result = $class::getAll($link);
            echo "<select name='$class'>";
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row[$id]."'>".$row['nombre']."</option>";
            }
            echo"</select>";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function createTable($idPedido){
        $nlinea = 1;
        
        echo"";
        if(isset($_SESSION["lineas"])){
            foreach ($_SESSION['lineas'] as  $linea) {
                echo "<tr>
                    <td>$linea->idPedido</td>
                    <td>$linea->nlinea</td>
                    <td>$linea->idProducto</td>
                    <td>$linea->cantidad</td>
                    <td></td>
                </tr>";
                $nlinea++;
            }
        }
        return $nlinea;
    }

?>