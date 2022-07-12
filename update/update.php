<?php
    include_once('../conexao/conexao.php');
    
    if(isset($_POST['update']))
    {

        $id = $_POST['id'];
        $nome = $_POST['produto'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $valor = $_POST['valor'];

        $sqlUpdate = "update produtos SET nome = '$nome', marca = '$marca', modelo = '$modelo', valor = '$valor' WHERE id_produtos = '$id';";

        $result = $conexao->query($sqlUpdate);
        
    }
    else
    {
        header('Location: ../index.php');
    }
    header('Location: ../index.php');
?>