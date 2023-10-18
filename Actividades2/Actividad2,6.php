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
    include "Actividad2,6.html";
}
?>