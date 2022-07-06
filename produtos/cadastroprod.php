<?php
    include_once('../conexao/conexao.php');
    $nome = $_POST['produto'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $valor = $_POST['valor'];
    //echo("$usuario<br/>$idade<br/>$senha");

    if(empty($nome) || empty($marca) || empty($modelo) || empty($valor)){
        header('Location: inserir.php');
    }
    else{
        $sql = "INSERT INTO produtos (nome, marca, modelo, valor) VALUES ('$nome', '$marca', '$modelo','$valor')";
        header('Location: ../index.php');
        $conexao->query($sql);
    }
?>