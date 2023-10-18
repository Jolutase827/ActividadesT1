<?php
interface ISelectorIndividual{
    public function __construct($titulo, $nombre,$elementos,$entero);
    public function generaSelector();



}

abstract class SelectorIndividual implements ISelectorIndividual{
    private $titulo;
    private $nombre;

    private $elementos;

    private $entero;

    public function __construct($titulo, $nombre,$elementos,$entero){
        $this->titulo = $titulo;
        $this->nombre = $nombre;
        $this->elementos =  $elementos;
        $this->entero = $entero;
    }

    public abstract function generaSelector();

    public function __get($var){
        if (property_exists(__CLASS__, $var)){
        return $this->$var;
        }
        return NULL;
        }

    
}

class SIRadioOpcion extends SelectorIndividual{
    public function __construct($titulo, $nombre,$elementos,$entero){
        parent::__construct($titulo, $nombre,$elementos,$entero);
    }
    public function generaSelector(){
        $salida ="<p>".$this->nombre."</p><fieldset>";
        foreach ($this->elementos as $key => $value) {
            $salida.="<label><input type='radio' name='".$this->name."' value='$value'/> $value</label>";
        }
        $salida .="</fieldset>";
        return $salida;
    }

}
class SISelect extends SelectorIndividual{
    public function __construct($titulo, $nombre,$elementos,$entero){
        parent::__construct($titulo, $nombre,$elementos,$entero);
    }
    public function generaSelector(){
        $salida ="<p>$this->nombre</p><select name='".$this->nombre."'>";
        foreach ($this->elementos as $key => $value) {
            $salida.="<option value='$value'> $value</option>";
        }
        $salida .="</select>";

        return $salida;
    }
}

?>