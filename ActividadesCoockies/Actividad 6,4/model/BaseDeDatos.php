<?php
class BaseDeDatos{
    private $link;
    public function __construct(){
        try{
        $this->link = new PDO("mysql:host=".HOST.";dbname=".BASE,USUARIO,
        PASS,OPCIONES);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>