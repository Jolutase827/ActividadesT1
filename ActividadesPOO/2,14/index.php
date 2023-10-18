<?php
include "clases/Imagen.php";
if(isset($_POST['Enviar'])){
    $array = [limpiar($_POST['o1']),limpiar($_POST['o2']),limpiar($_POST['o3']),limpiar($_POST['o4'])];
    include "vistas/vistaformulario.php";
}elseif(isset($_POST['subir'])){
    crear_directorio($_POST['directorio']);
    $file = new Imagen($_FILES['imagen']['tmp_name'],$_FILES['imagen']['name'],$_FILES['imagen']['type']);
 if($file->esta_cargado())
    $file->cambiar_el_nombre($_POST['directorio']);
    $file->mover();
}else{
    include "vistas/vistaopciones.html";
}


?>