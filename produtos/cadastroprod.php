<?php
    include_once('../conexao/conexao.php');
    $nome = $_POST['produto'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    //echo("$usuario<br/>$idade<br/>$senha");

    if(empty($nome) || empty($marca) || empty($tipo) || empty($valor)){
        header('Location: inserir.php');
    }
    else{
        $sql = "INSERT INTO produtos (nome, marca, tipo, valor) VALUES ('$nome', '$marca', '$tipo','$valor')";
        header('Location: ../index.php');
        $conexao->query($sql);
    }
?>