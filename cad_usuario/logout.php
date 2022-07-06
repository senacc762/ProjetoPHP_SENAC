<?php
session_start();
require_once 'conexao.php';
unset($_SESSION['logado']);
header('Location: login.php')
?>