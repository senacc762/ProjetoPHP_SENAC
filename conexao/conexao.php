<?php
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','WCOc@rneir08109');
define('DB','db_loja');

$conexao = new mysqli(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>