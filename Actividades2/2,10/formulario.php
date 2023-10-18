<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="subir.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen"/>
    <?php
        $array = [limpiar($_POST['o1']),limpiar($_POST['o2']),limpiar($_POST['o3']),limpiar($_POST['o4'])];
        $textohtml = lista('directorio',$array);
        echo $textohtml;



        function limpiar($mensaje) : string{
            return htmlspecialchars(trim($mensaje));
        }

        function lista($nombre, $array) : string{
            $salida ='<select name="'.$nombre.'">';
            foreach($array as $valor){
                
                $salida .= '<option value="'.$valor.'"/>'.$valor.'</option>';
            }
            $salida .= '</select>';
            return $salida;
        }

    ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>