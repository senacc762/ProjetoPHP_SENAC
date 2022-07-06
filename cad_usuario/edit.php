<?php
session_start();
require_once 'conexao.php';
//include_once 'index.php';
$nome = filter_input(INPUT_GET, 'nome');
$sqledit = "update table_name
SET column1 = value1, column2 = value2
WHERE nome = '$nome';";
$resultado = mysqli_query($conexao, $sqldel);
if(mysqli_affected_rows($conexao) > 1){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
}
header('Location: index.php');
?>