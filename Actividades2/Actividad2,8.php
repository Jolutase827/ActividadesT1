<?php
$errores=[false,false,false];
$error=false;
if(isset($_POST['boton'])){
    $valores = [$_POST['nombre'],$_POST['apellido'],$_POST['domicilio']];
    if($valores[0]==''){
        $error= true;
        $errores[0]=true;
    }
    if($valores[1]==''){
        $error= true;
        $errores[1]=true;
    }
    if($valores[2]==''){
        $error= true;
        $errores[2] = true;
    }
    if(!$error){
        echo $valores[0].' '.$valores[1].' '.$valores[2];
    }

}
if(!isset($_POST['boton'])||$error){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Actividad2,8.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" value="<?php
            echo  (!$errores[0]&&$error==true)?$valores[0]:'';
        ?>"/>
        <?php
            echo  ($errores[0])?'Nombre incompleto':'';
        ?>
        <br/>
        <input type="text" name="apellido" placeholder="Apellido" value="<?php
            echo  (!$errores[1]&&$error==true)?$valores[1]:'';
        ?>"/>
        <?php
            echo  ($errores[1])?'Apellido vacio':'';
        ?>
        <br/>
        <input type="text" name="domicilio" placeholder="Domicilio" value="<?php
            echo  (!$errores[2]&&$error==true)?$valores[2]:'';
        ?>"/>
        <?php
            echo  ($errores[2])?'Domicilio vacio':'';
        ?>
        <br/>
        <input type="submit" name="boton" placeholder="Enviar"/>
    </form>
</body>
</html>

<?php
}
?>