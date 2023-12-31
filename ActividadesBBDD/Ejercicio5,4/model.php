<?php
    class Base{
        private $link;

        function __construct(){
            try{
                $opciones = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => true
                );
                $this->link = new PDO("mysql:host=localhost;dbname=virtualmarket",'root','',$opciones);
            }catch(PDOException $e){
                echo $e->getMessage();
                $this->link = false;
            }
        }
    
        function __get($name){
            return $this->$name;
        }
}

    class Clientes{
        static function getAllClientes($con){
            try{
                $result = $con->prepare('SELECT dniCliente, nombre FROM clientes');
                $result->execute();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

    }

    class Producto{
        static function getAllProductos($con){
            try{
                $result = $con->prepare('SELECT idProducto, nombre FROM productos');
                $result->execute();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }

    class Pedido{

        private $idPedido;
        private $fecha;
        private $dniCliente;

        function __construct($idPedido,$fecha,$dniCliente){
            $this->idPedido = $idPedido;
            $this->fecha = $fecha;
            $this->dniCliente = $dniCliente;
        }

        function isPedido($con){
            try{
                $result = $con->prepare('SELECT idPedido FROM pedidos WHERE idPedido = ?');
                $result->bindParam(1, $this->idPedido);
                $result->execute();
                
                if($fila = $result->fetch(PDO::FETCH_ASSOC)){
                    return true;
                }
                return false;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function createPedido($con){
            try{
                $query = 'INSERT INTO pedidos(idPedido,fecha,dniCliente,dirEntrega) VALUES(?,?,?,"")';
                $pstmt = $con->prepare($query);
                $pstmt->bindParam(1, $this->idPedido);
                $pstmt->bindParam(2, $this->fecha);
                $pstmt->bindParam(3, $this->dniCliente);
                return $pstmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function addLinea($con,$idProducto,$cantidad){
            try{
                $query = "SELECT max(nlinea) as linea FROM lineaspedidos WHERE idPedido = ?";
                $stmt = $con->prepare($query);
                $stmt->bindParam(1, $this->idPedido);
                $stmt->execute();
                if($data = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $nlinea = $data["linea"]+1;
                }else{
                    $nlinea = 1;
                }
                $query = 'INSERT INTO lineaspedidos(idPedido,nlinea,idProducto,cantidad) VALUES(?,?,?,?)';
                $stmt = $con->prepare($query);
                $stmt->bindParam(1, $this->idPedido);
                $stmt->bindParam(2, $nlinea);
                $stmt->bindParam(3, $idProducto);
                $stmt->bindParam(4,$cantidad);
                return $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }


    function customersList($result){
        echo '<select name="cliente">';
        while($fila = $result->fetch(PDO::FETCH_ASSOC)){
            echo'<option value="'.$fila["dniCliente"].'"/>'.$fila['nombre'].'</option>';
    
        }
        echo '</select>';
    }
    function productList($result){
        echo '<select name="producto">';
        while($fila = $result->fetch(PDO::FETCH_ASSOC)){
            echo'<option value="'.$fila["idProducto"].'"/>'.$fila['nombre'].'</option>';
    
        }
        echo '</select>';
    }

?>