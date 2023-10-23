<?php
require "modelo.php";
if (isset($_COOKIE["nombre"])) {
    require"crud.php";
}else{
    require"autenticar.php";
}
?>