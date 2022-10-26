<?php

require_once('dadosparabanco.php');

$conn = new mysqli($NomedoServidor, $UsuarioBD, $SenhaBD);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>