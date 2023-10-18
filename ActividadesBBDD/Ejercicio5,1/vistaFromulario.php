<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRO USUARIO</h1>
    <form action="index.php" method="post">
        <p>Dni del usuario</p>
        <?php 
            if(!isset($_GET['update'])){
            echo '<input type="text" placeholder="DNI" name="dni" minlength="9" maxlength="9" value="'.$cliente->dni.'" required/>';
            }else{
                echo '<input  style="display:none" type="text" placeholder="DNI" name="dni" minlength="9" maxlength="9" value="'.$cliente->dni.'" required/>';
                echo "<h1>$cliente->dni</h1>";
            }
        ?>
        
        <p>Nombre del usuario</p>
        <input type="text" placeholder="Nombre" name="name" value="<?=$cliente->name?>" required/>
        <p>Direccion del usuario</p>
        <input type="text" placeholder="Direccion" name="direccion" value="<?=$cliente->direccion?>"required/>
        <p>Email del usuario</p>
        <input type="email" placeholder="Email" name="email" value="<?=$cliente->email?>"required/>
        <p>Password del usuario</p>
        <input type="password" placeholder="Contraseña" name="pwd" value="<?=$cliente->password?>"required/>
        <p>Eres administrador</p>
        <fieldset>
            <label><input type='radio' name='administrador' <?php if($cliente->administrador){ echo "checked";}?>  value='true'/> Sí</label>
            <label><input type='radio' name='administrador'<?php if(!$cliente->administrador){ echo "checked";}?> value='false'/> No</label>
        </fieldset>
        <input type="submit" value="Enviar" name="<?php if(isset($_GET['update'])){echo "update";}else echo "post";?>">
    </form>
    
</body>
</html>