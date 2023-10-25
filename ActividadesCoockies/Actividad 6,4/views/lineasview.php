<form action='lineas.php' method='post'>
    <table>
        <tr>
            <td>Pedido</td>
            <td>Nlinea</td>
            <td>producto</td>
            <td>cantidad</td>
            <td></td>
        </tr>
        <?php $nlinea = createTable($idPedido)?>
        <tr>
            <td><?=$idPedido?></td>
            <td><?=$nlinea?><input type="text" value="<?=$nlinea?>" name="nlinea" style="display: none;" readonly></td>
            <td><?php createList($base->link,"Productos","idProducto"); ?></td>
            <td><input type="text" name="cantidad" /></td>
            <td><input type="submit" value="Continuar" name="boton"></td>
        </tr>
    </table>
</form>
<a href="terminar.php">terminar</a>