<?php
class Base{
    private $link;
    function __construct(){
        try {
            $opciones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT=>true
            );
            $this->link = new PDO('mysql:host=localhost:3307;dbname=virtualmarket', 'root', ''
            ,$opciones);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function __get($var){
        return $this->$var;
       }

}

class Clientes{
    private $dni;
    private $name;
    private $direccion;
    private$pwd;
    private $email;
    private $administrador;
    
    function __construct($dni,$name,$direccion,$email,$pwd,$administrador){
        $this->dni = $dni;
        $this->name = $name;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->administrador = $administrador;
    }

    static function getAll($con){
        $result = $con->prepare('SELECT * FROM clientes');
        $result->execute();
        return $result;
    }
    function searchById($con){
        $result = $con->prepare("SELECT * FROM clientes WHERE dniCliente=:dni");
        $result->bindParam(':dni',$this->dni);
        $result->execute();
        while($fila=$result->fetch(PDO::FETCH_ASSOC)){
            if($fila['dniCliente']==$this->dni){
                return false;
            }
        }
        return true;
    }
    function insert($con){
        $query = "INSERT INTO clientes (dniCliente, nombre, direccion, email, pwd, administrador) VALUES (:dni, :nombre, :direccion, :email, :pwd, :administrador)";
        $result = $con->prepare($query);

        // Bind parameters
    $result->bindParam(':dni', $this->dni);
    $result->bindParam(':nombre', $this->name);
    $result->bindParam(':direccion', $this->direccion);
    $result->bindParam(':email', $this->email);
    $result->bindParam(':pwd', $this->pwd);
    $result->bindParam(':administrador', $this->administrador);

    // Execute the prepared statement
    $result->execute();

    return $result;
}
 
    function update($stmt){
        $query = "UPDATE clientes SET nombre=:nombre, direccion=:direccion, email=:email, pwd=:pwd, administrador=:administrador WHERE dniCliente=:dni";
        $result = $stmt->prepare($query);
        $result->bindParam(':dni', $this->dni);
        $result->bindParam(':nombre', $this->name);
        $result->bindParam(':direccion', $this->direccion);
        $result->bindParam(':email', $this->email);
        $result->bindParam(':pwd', $this->pwd);
        $result->bindParam(':administrador', $this->administrador);
        $result->execute();
        return $result;
    }
    static function delete($stmt,$dni){
        $query = "DELETE FROM clientes WHERE dniCliente=:dni";
        $result = $stmt->prepare($query);
        $result->bindParam(':dni',$dni);
        $result->execute();
        return $result;
    }
    static function getByName($stmt,$dni){
        $query = "SELECT * FROM clientes WHERE dniCliente=:dni";
        $result = $stmt->prepare($query);
        $result->bindParam(':dni',$dni);
        $result->execute();
        $fila = $result->fetch(PDO::FETCH_ASSOC);
        $cliente = new Clientes($fila["dniCliente"],$fila["nombre"],$fila["direccion"],$fila["email"],$fila["pwd"],$fila["administrador"]);
        return $cliente;
    }
    public function __get($var){
        if (property_exists(__CLASS__, $var)){
        return $this->$var;
        }
        return NULL;
    }

    public function __set($var, $valor){
        if (property_exists(__CLASS__, $var)){
        $this->$var = $valor;
        } else
        echo "No existe el atributo $var.";
    }

    

}





?>