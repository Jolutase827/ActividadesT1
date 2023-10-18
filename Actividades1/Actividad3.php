<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad3</title>
</head>
<body>
    <?php
    $nombres = array('Marcos','Gabriel','IVAN','Jaland','Bellinghan','MBAPEEEE','Marc');
    echo "<p> El array tiene ".count($nombres)." elementos.";
    echo  "<p> Los elementos son ".implode(',',$nombres)."</p>";
    sort($nombres,SORT_STRING);
    echo "<p> El array ordenado es así ".implode(',',$nombres)."</p>";
    $nombres = array_reverse($nombres);
    echo "<p> El array ordenado al reves es así ".implode(',',$nombres).' </p>';
    echo "<p> Mi nombre esta en esta posicion ".array_search('IVAN',$nombres).' </p>';
    $nombres = array(array('id'=>1,'nombre'=>'JOSE','edad'=>22),array('id'=>2,'nombre'=>'Francisco','edad'=>23),array('id'=>3,'nombre'=>'Javier','edad'=>25),array('id'=>4,'nombre'=>'Ivan','edad'=>12),array('id'=>5,'nombre'=>'Gabriel','edad'=>19));
    echo "<table border=\"1\">";
    echo "<tr> <th>Id</th><th>Nombre</th><th>Edad</th></tr>";
    foreach ($nombres as $persona){
        echo "<tr> <th>".$persona['id']."</th><th>".$persona['nombre']."</th><th>".$persona['edad']."</th></tr>";
    }
    echo "</table>";
    $soloNombres = array_column($nombres,'nombre');
    echo "<p> Solo nombres ".implode(',',$soloNombres)."</p>";
    $numeros = array(1,2,3,4,5,6,7,8,9,10);
    echo "<p> La suma del array numeros es ".array_sum($numeros)."</p>";
    ?>
</body>
</html>