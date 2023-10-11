<?php
    $nombre = $_POST["txtnombre"]; //usamos un arreglo para almacenar
    $edad = $_POST["txtedad"]; //usamos un arreglo para almacenar
    $correo = $_POST["txtcorreo"]; //usamos un arreglo para almacenar
    $contraseña = $_POST["txtcontraseña"]; //usamos un arreglo para almacenar

    echo "<p>Mi nombre es: " . $nombre . "</p> ";
    echo "<p>Mi edad es: " . $edad . "</p> ";
    echo "<p>Mi correo es: " . $correo ."</p> ";
    echo "<p>Mi contraseña es: " . $contraseña ."</p> ";
    echo "<a href = 'index.php'>Al inicio</a> ";
?>