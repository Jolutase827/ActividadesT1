<p>Los elementos del <?= $_POST['valor']?> son</p>
<?php
 foreach ($producto->asignar() as $key => $value) {
    echo "$key: $value";
} 
?>