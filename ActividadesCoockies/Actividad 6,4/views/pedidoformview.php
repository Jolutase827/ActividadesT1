<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pedido</title>
</head>
<body>
    <form action="lineas.php" method="post">
        Id Pedido: <input type="text" name="idPedido" required/>
        <br>
        Fecha:<input type="date" name="fecha" required/>
        <br>
        Cliente: <?php createList($base->link,"Clientes","dniCliente") ?>
        <br>
        <input type="submit" value="Enviar" name="botonidPedido"/>
    </form>
</body>
</html>