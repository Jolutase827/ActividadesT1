<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2,9</title>
</head>
<body>
    <?php
        if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
            $nombreSeparado = explode('.',$_FILES['imagen']['name']);
            if($nombreSeparado!=false){
                if(count($nombreSeparado)==2){
                    if($nombreSeparado[1]!='png'||$nombreSeparado[1]!='jpg'){
                        if(is_dir('img/')){
                            if(!is_file('img/'.$_FILES['imagen']['name'])){
                                move_uploaded_file($_FILES['imagen']['tmp_name'],'img/'.$_FILES['imagen']['name']);
                            }else{
                                move_uploaded_file($_FILES['imagen']['tmp_name'],'img/'.uniqid().'-'.$_FILES['imagen']['name']);
                            }
                        }else{
                            mkdir('img/');
                            move_uploaded_file($_FILES['imagen']['tmp_name'],'img/'.$_FILES['imagen']['name']);
                        }
                    }else{
                        echo 'Posible hackeo';
                    }
                }else{
                    echo 'Mas de dos puntos';
                }
            }else{
                echo 'No tiene extensión';
            }
        }else{
            echo 'Error no ha cargado';
        }
    ?>
</body>
</html>