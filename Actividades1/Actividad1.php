<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
<?php $numero = 6;
    for($x =$numero-1; $x>0 ; $x--)
    {
        $numero*=$x;
    }
?>
    <p>Factorial de 6 = <?= $numero ?></p>

<?php 
$numero1 = 5;
$numero2 = 21;
$numero3 = 2;
if($numero1<=$numero2&&$numero1<=$numero3){
    echo '<p>El numero menor es '.$numero1.'</p>';
}elseif($numero2<=$numero3&&$numero2<=$numero1){
    echo '<p>El numero menor es '.$numero2.'</p>';
}else{
    echo '<p>El numero menor es '.$numero3.'</p>';
}
if($numero1>=$numero2&&$numero1>=$numero3){
    echo '<p>El numero mayor es '.$numero1.'</p>';
}elseif($numero2>=$numero3&&$numero2>=$numero1){
    echo '<p>El numero mayor es '.$numero2.'</p>';
}else{
    echo '<p>El numero mayor es '.$numero2.'</p>';
}
?>
</body>
</html>