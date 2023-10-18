<?php
 crear_directorio($_POST['directorio']);
 if(is_uploaded_file($_FILES['imagen']['tmp_name']))
    if(estado_archivo($_POST['directorio'],$_FILES['imagen']['name'])!=false){
        $nombre = estado_archivo($_POST['directorio'],$_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],$nombre);
        echo $nombre.' subido';
    }else{
        echo 'Error';
    }

    echo '<a href="opciones.html">Volver a opciones</a>';

 function crear_directorio($name){
    if(!is_dir($name.'/')){
        mkdir($name.'/');
    }
 }
 function estado_archivo($directorio,$nombreArchivo){
    $partes = explode('.', $nombreArchivo);
    if(count($partes)==2){
        if($partes[1]=='png'||$partes[1]=='jpg'||$partes[1]=='gif'){
            if(is_file($directorio.'/'.$nombreArchivo))
                return $directorio.'/'.$partes[0].uniqid().'.'.$partes[1];
            else
                return $directorio.'/'.$nombreArchivo;
        }
    }
    return false;

 }


?>