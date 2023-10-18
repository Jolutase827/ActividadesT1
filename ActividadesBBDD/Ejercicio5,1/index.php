<?php
require "modelo.php";
$bd=new Base();
if(isset($_POST['post'])){
    
    $cliente = new Clientes($_POST['dni'],$_POST['name'],$_POST['direccion'],$_POST['email'],$_POST['pwd'],$_POST['administrador']);
    if($cliente->searchById($bd->link)){
        $cliente->insert($bd->link);
        header("Location: index.php");
    }else
        echo "Error al insertar ".$_POST['name']." ya existe dni";
}else if(isset($_POST['update'])){
    $cliente = new Clientes($_POST['dni'],$_POST['name'],$_POST['direccion'],$_POST['email'],$_POST['pwd'],$_POST['administrador']);
    $cliente->update($bd->link);
    header("Location: index.php");
}else if(isset($_GET["update"])){
    $cliente = Clientes::getByName($bd->link,$_GET["update"]);
    require "vistaFromulario.php";
}else if(isset($_GET["post"])){
    $cliente = new Clientes("","","","","","");
    require "vistaFromulario.php";
}else if(isset($_GET["delete"])){
    Clientes::delete($bd->link,$_GET["delete"]);
    header("Location: index.php");
}else if(isset($_GET["get"])){
    include "vista.php";
}else{
    $clientes = Clientes::getAll($bd->link);
    echo "<table>
            <tr>
                <td>DNI</td>
                <td>NAME</td>
                <td></td>
                <td></td>
                <td><a href='index.php?post=post'>Añadir</a></td>
            </tr>";
    while($fila = $clientes->fetch(PDO::FETCH_ASSOC)){
        echo "
        <tr>
            <td>".$fila['dniCliente']."</td>
            <td>".$fila['nombre']."</td>
            <td><a href='index.php?update=".$fila['dniCliente']."'>Actualizar</a></td>
            <td><a href='index.php?delete=".$fila['dniCliente']."'>Borrar</a></td>
            <td><a href='index.php?get=".$fila['dniCliente']."'>Más detalle</a></td>
        </tr>";
    }
    echo "</table>";
}
?>