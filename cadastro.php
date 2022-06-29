<?php
    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];
    //echo("$usuario<br/>$idade<br/>$senha");

    if(empty($usuario) || empty($idade) || empty($senha)){
        header('Location: formulario.php');
    }
    else{
        $sql = "INSERT INTO usuarios (nome, idade, senha) VALUES ('$usuario', '$idade', '$senha')";
        header('Location: login.php');
        $conexao->query($sql);
    }
?>