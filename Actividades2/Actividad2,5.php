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
        include "Actividad2,5.html";
    }


?>