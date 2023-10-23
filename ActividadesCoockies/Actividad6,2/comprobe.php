<?php
require "modelo.php";
if (isset($_POST['autenticar'])){
    $bd = new Base();
    $dni = $_POST['dni'];
    $pwd = $_POST['pwd'];
    $autenticado = false;
    $clientes = Clientes::getAll($bd->link);
    while($row = $clientes->fetch(PDO::FETCH_ASSOC)) { 
        if($row["dniCliente"] == $dni && $row['pwd']==$pwd) {
            setcookie('nombre', $row['nombre'], time() + 3000);
            $autenticado = true;
        }
    }
    if(!$autenticado){
        echo 'No existe ningún dni o contraseña incorrecta clica aquí para reintentar <a href="index.php">Reintentar</a>';
    }else{
        echo 'Se ha registrado correctamente, <a href="index.php">ir al crud</a>';
    }


}
