<?php 
if(isset($_POST['boton'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $oper = $_POST['operacion'];

    if($oper === '*'){
        echo"El numero $n1 multiplicado por $n2 es ".($n1*$n2);
    }elseif($oper === '+'){
        echo"El numero $n1 más $n2 es ".($n1+$n2);
    }elseif($oper === '-'){
        echo"El numero $n1 menos $n2 es ".($n1-$n2);
    }elseif($oper === '/'){
        echo"El numero $n1 dividido por $n2 es ".($n1/$n2);
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
    <form action="Actividad2,7,1.php" method="post">
        <input type="number" name="n1" placeholder="Numero 1"/>
        <input type="number" name="n2" placeholder="Numero 2"/>
        <select name="operacion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
          </select>
        <input type="submit" name="boton" value="Calcular"/>
    </form>
</body>
</html>

<?php

}

?>