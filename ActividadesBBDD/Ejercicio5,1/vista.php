<?php
$cliente = Clientes::getByName($bd->link,$_GET["get"]);
echo "<table>
            <tr>
                <td>DNI</td>
                <td>NOMBRE</td>
                <td>DIRECCION</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                <td>ADMINISTRADOR</td>
                <td><a href='index.php'>Volver</a></td>
            </tr>
            <tr>
                <td>$cliente->dni</td>
                <td>$cliente->name</td>
                <td>$cliente->direccion</td>
                <td>$cliente->email</td>
                <td>$cliente->pwd</td>
                <td>$cliente->administrador</td>
            </tr>
        </table>";
?>