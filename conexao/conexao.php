<?php
define('HOST','127.0.0.1:3309');
define('USUARIO','root');
define('SENHA','');
define('DB','bd_loja');

$conexao = new mysqli(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>