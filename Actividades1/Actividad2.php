<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $numero1 = 3;
    $numero2 = 2;
    $numero3 = 1;
    if($numero1<=$numero2){
        if($numero1<=$numero3){
            if($numero2<=$numero3){
                echo $numero1.' '.$numero2.' '.$numero3;
            }else{
                echo $numero1.' '.$numero3.' '.$numero2;
            }  
        }else{       
            echo $numero3.' '.$numero1.' '.$numero2;    
        }
    }else{
        if($numero2<=$numero3){
            if($numero1<=$numero3){
                echo $numero2.' '.$numero1.' '.$numero3;
            }else{
                echo $numero2.' '.$numero3.' '.$numero2;
            }          
        }else{
            echo $numero3.' '.$numero2.' '.$numero1;  
        }
    }
    ?>
</body>
</html>