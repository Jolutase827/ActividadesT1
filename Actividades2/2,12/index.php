<?php
include "funciones.php";
if(isset($_POST['Enviar'])){
    $array = [limpiar($_POST['o1']),limpiar($_POST['o2']),limpiar($_POST['o3']),limpiar($_POST['o4'])];
    include "vistaformulario.php";
}elseif(isset($_POST['subir'])){
    crear_directorio($_POST['directorio']);
 if(is_uploaded_file($_FILES['imagen']['tmp_name']))
    if(estado_archivo($_POST['directorio'],$_FILES['imagen']['name'])!=false){
        $nombre = estado_archivo($_POST['directorio'],$_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],$nombre);
        echo $nombre.' subido';
    }else{
        echo 'Error';
    }
}else{
    include "vistaopciones.html";
}


?>