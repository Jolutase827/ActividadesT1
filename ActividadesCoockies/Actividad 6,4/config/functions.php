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
            foreach ($_SESSION['lineas'] as  $indice => $linea) {
                echo "<tr>
                    <td>".$linea[0]."</td>
                    <td>".$linea[1]."</td>
                    <td>".$linea[2]."</td>
                    <td>".$linea[3]."</td>
                    <td></td>
                </tr>";
                $nlinea++;
            }
        }
        return $nlinea;
    }

?>