<?php
    include_once('../conexao/conexao.php');
    
    if(isset($_POST['update']))
    {

        $id = $_POST['id'];
        $nome = $_POST['produto'];
        $marca = $_POST['marca'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];

        $sqlUpdate = "update produtos SET nome = '$nome', marca = '$marca', tipo = '$tipo', valor = '$valor' WHERE id_produtos = '$id';";

        $result = $conexao->query($sqlUpdate);
        
    }
    else
    {
        header('Location: ../index.php');
    }
    header('Location: ../index.php');
?>