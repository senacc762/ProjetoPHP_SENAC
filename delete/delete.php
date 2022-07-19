<?php

    if(!empty($_GET['id_produtos']))
    {
        include_once('../conexao/conexao.php');

        $id = $_GET['id_produtos'];

        $sqlDelete ="Delete FROM produtos WHERE id_produtos=$id";

        $result = $conexao->query($sqlDelete);

        header('Location: ../index.php');

    }
    else
    {
        header('Location: ../index.php');
    }
?>