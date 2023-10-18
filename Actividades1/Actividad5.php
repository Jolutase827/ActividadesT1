<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     if(!isset($_POST['boton'])){
     ?>
<form action="Actividad5.php" method="post">
    <label for="login">Login:</label>
    <input type="text" name="login" size="20" /><br />
    <label for="email">E-mail:</label>
    <input type="text" name="email" size="50" /><br />
    <input type="submit" value="Enviar" name="boton"/>
</form>
<?php
     }else{
        $nombre = $_POST['login'];
        $email = $_POST['email'];
        echo 'Hola '.$nombre.' con email '.$email;
     }
     ?>

</body>
</html>