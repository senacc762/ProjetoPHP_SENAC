<?php
require_once 'conexao/conexao.php';
session_start();
// if(!isset($_SESSION['logado'])){
//     header('Location: login.php');
// }

// cria a instrução SQL que vai selecionar os dados
//$sql = "SELECT * FROM usuarios";
// executa a query
//$resultado = mysqli_query($conexao, $sql);
//Transforma o resultado em array
//while($dados = mysqli_fetch_array($resultado)){
//$nome = $dados['nome'];
//$senha = $dados['senha'];
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Início</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="resources/css/geral.css" rel="stylesheet" />

    <style>
        
    </style>
</head>
<body>
    <div class="tab">
        <button type="button" class="btn btn-primary"><a href="logout.php">Sair</a></button>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Senha</th>
                <th scope="col"></th> 
                </tr>
            </thead>
            <?php
                // $col = 0; 
                // while($dados = mysqli_fetch_array($resultado)){
                // $nome = $dados['nome'];
                // $senha = $dados['senha'];
                // $col = $col + 1;    
            ?>
            <tbody>
                <tr>
                    
                </tr>
            </tbody>
    
        </table>
    </div>
</body>
</html>