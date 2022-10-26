<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

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
            <h2>Cadastro de Carro</h2>
            <div class="form-group">
            <form action="InserirCarro.php" method="post">
                    <label>Insira aqui a marca do carro</label>
                    <input type="text" name="marca" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Insira o modelo do carro</label>
                    <input type="text" name="modelo" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label>Insira a cor do carro</label>
                    <input type="text" name="cor" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar Carro">
                </div>
                    <br>
                <a href="VerRegistros.php" class="btn btn-primary">Exibir relatório de carros</a>

            </form>
        </div> 

    </body>
</html> 