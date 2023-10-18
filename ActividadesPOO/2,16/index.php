<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        
    
<?php
    include "MODEL/model.php";
    $ciudad = new SISelect("Ciudad","Ciudad",array('Valencia','Barcelona','Madrid'),2);
    $idioma = new SISelect("Nivel idioma","Nivel idioma",array('Alto','Medio','Bajo'),2);
    $sexo = new SIRadioOpcion("Sexo","Sexo",array('Hombre','Mujer','No sabe no contesta'),3);
    $estado = new SIRadioOpcion("Estado","Estado",array('Encendido','Apagado','Onfire'),3);
    echo $ciudad->generaSelector();
    echo $idioma->generaSelector();
    echo $sexo->generaSelector();
    echo $estado->generaSelector();


?>
    </form>
</body>
</html>
