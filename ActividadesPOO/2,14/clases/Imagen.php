<?php
class Imagen{
    private $tmp_name;
    private $name;
    private $type;

    function __construct($tmp_name,$name,$type){
        $this->tmp_name = $tmp_name;
        $this->name = $name;
        $this->type = $type;
    }

    public function esta_cargado(){
        return is_uploaded_file($this->tmp_name);
    }
    public function cambiar_el_nombre($directorio){
        if(is_file($directorio.'/'.$this->name)){
            $partes = explode('.',$this->name);
            $this->name = $directorio.'/'.$partes[0].uniqid().'.'.$partes[1];
        }else
            $this->name = $directorio.'/'.$this->name;
    }
    public function mover(){
        move_uploaded_file($this->tmp_name,$this->name);
    }
}
function crear_directorio($name){
    if(!is_dir($name.'/')){
        mkdir($name.'/');
    }
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