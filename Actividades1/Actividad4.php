<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  $nombre='     manolo   ';
    echo '<p>'.'Funcion trim:'.trim($nombre).'</p>';
    echo '<p>'.'Longitud de nombre: '.strlen($nombre).'</p>';
    echo '<p>'.'Nombre en mayusculas: '. strtoupper($nombre).'</p>';
    echo '<p>'.'Nombre en minusculas: '.strtolower($nombre).'</p>';
    $prefijo = 'ma';
    echo '<p>'.'Nombre tiene el prefijo ma: '.strpos($nombre,$prefijo).'</p>';
    echo '<p>'.'Cuantas veces aparece la letra a en minuscula: '.substr_count($nombre,strtolower('a')).'</p>';
    echo '<p>'.'Cuantas veces aparece la letra a en mayuscula: '.substr_count($nombre,strtoupper('a')).'</p>';
    echo '<p>'.'Cuantas veces aparece la letra a en mayuscula: '.substr_count($nombre,strtoupper('a')).'</p>';
    
    if(substr_count($nombre,strtolower('a'))==0){
        echo 'No hay a';
    }else{
        echo '<p>'.'La letra a esta en la posición: '.strpos($nombre,strtolower('a')).'</p>';
    }
    if(substr_count($nombre,strtoupper('a'))==0){
        echo 'No hay A';
    }else{
        echo '<p>'.'La letra A esta en la posición: '.strpos($nombre,strtoupper('a')).'</p>';
    }
    echo '<p> Nombre sustituyendo o por 0 es:'.str_ireplace('o','0',$nombre).'</p>';
    echo '<p> Nombre sustituyendo O por 0 es:'.str_ireplace(strtoupper('o'),'0',$nombre).'</p>';
    ?>
    
</body>
</html>