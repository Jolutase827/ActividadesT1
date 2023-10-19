<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="number" name="idPedido" placeholder="Id Pedido" required/>
        <input type="date" name="fecha" placeholder="Fecha" required/>
        <?php  customersList(Clientes::getAllClientes($base->link));
        productList(Producto::getAllProductos($base->link));
        ?>
        <input type="number" name="cantidad" placeholder="cantidad" required/>
        <input type="submit" value="Enviar" name="button" required/>
    </form>
</body>
</html>