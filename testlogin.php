<?php
    session_start();
    //print_r($_REQUEST);
    if(!empty($_POST['usuario']) && !empty($_POST['senha']))
    {   include_once('conexao.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        //echo("$usuario <br> $senha");
        $sql = "SELECT * FROM usuarios WHERE nome = '$usuario' and senha = '$senha'";
        $result = mysqli_query($conexao, $sql);
        //print_r($result);
        
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['logado']);
            header('Location: login.php');

        }
        else{
            $_SESSION['logado'] = true;
            header('Location: index.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>