<?php // essa validação nao deu certo porem essa foi a tentativa
    session_start(); 
    include_once("connection.php");    
    if((isset($_POST['username'])) && (isset($_POST['password']))){
        $usuario =  $_POST['username']; 
        $senha =  $_POST['password'];


        $result = "SELECT * FROM usuarios where Login = $usuario and Senha = $senha ";
        $total = $result->num_rows;
        if ($total == 1){
            $_SESSION['loggedin'] = True;
            header("Location: CadastraCarros.php");
        }else{    
            $_SESSION['loggedin'] = False;
            header("Location: index.php");
        }
    
}

?>