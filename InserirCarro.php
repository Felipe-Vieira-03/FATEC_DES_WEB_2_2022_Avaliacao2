<?php


require_once('dadosparabanco.php');
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$conn = new mysqli($NomedoServidor, $UsuarioBD, $SenhaBD, $NomeBanco);

$sql = "INSERT INTO carros (marca, modelo, cor)
VALUES ('".$_POST[marca]."','".$_POST[modelo]."','".$_POST[cor]."')";

$conn->query($sql);


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
        <div class="wrapper">
                <a href="VerRegistros.php" class="btn btn-primary">Exibir relatório de carros</a>
                <br><br>
                <a href="CadastroCarros.php" class="btn btn-primary">Cadastrar um novo carro</a>
                <br><br>
                <a href="ExitScreen.php" class="btn btn-primary">Efetuar logout</a>
        </div> 

    </body>
</html> 