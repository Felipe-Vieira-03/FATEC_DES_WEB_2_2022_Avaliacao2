<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

require_once('dadosparabanco.php');
$conn = new mysqli($NomedoServidor, $UsuarioBD, $SenhaBD, $NomeBanco);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM carros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><th>|Marca | Modelo | Cor |</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["marca"]." | ".$row["modelo"]." |  ".$row["cor"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar um carro</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
            body{ font: 14px sans-serif; }
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
            <a href="CadastroCarros.php" class="btn btn-primary">Cadastrar um novo carro</a>
            <br><br>
            <a href="ExitScreen.php" class="btn btn-primary">Efetuar logout</a>
    </body>
</html> 

