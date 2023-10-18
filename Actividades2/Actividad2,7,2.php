<?php 
if(isset($_POST['boton'])){
    $n1 = $_POST['n1']; 
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    if($n1>=$n2&&$n1>=$n3){
        echo'El numero más alto es el primero y es '.$n1.' y ';
    }elseif($n2>=$n1&&$n2>=$n3){
        echo'El numero más alto es el segundo y es '.$n2.' y ';
    }else{
        echo'El numero más alto es el tercero y es '.$n3.' y ';
    }
    if($n1<=$n2&&$n1<=$n3){
        echo'el numero más bajo es el primero y es '.$n1;
    }elseif($n2<=$n1&&$n2<=$n3){
        echo'el numero más bajo es el segundo y es '.$n2;
    }else{
        echo'el numero más bajo es el tercero y es '.$n3;
    }

}else{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Actividad2,7,2.php" method="post">
        <input type="number" name="n1" placeholder="Numero 1"/>
        <input type="number" name="n2" placeholder="Numero 2"/>
        <input type="number" name="n3" placeholder="Numero 3"/>
        <input type="submit" name="boton" placeholder="Enviar"/>
    </form>
</body>
</html>

<?php

}

?>