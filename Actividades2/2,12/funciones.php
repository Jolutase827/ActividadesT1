<?php

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