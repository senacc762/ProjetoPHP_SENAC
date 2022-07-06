<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastro</title>
    <style>
        body{
            background: linear-gradient(to right, #4856a2, #262626);
            font-family: arial;
        }
        #box{
            width: 400px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 70px;
            border-radius: 10px;
            position: absolute;
            top: 0; bottom: 0;
            left: 0; right: 0;
            margin: auto;
            height: 530px;
        }
        h1{
            font-size: 32px;
            color: #fff;
            text-align: center;
        }
        input[type=text], input[type=password], input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        
        }
        label{
            color: #fff; 
        }
        button, a {
        background-color: rgba(0, 0, 0, 0);
        color: white;
        border: 3px solid dodgerblue;
        padding: 10px;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
        font-size: 22px;
        }
        button:hover {
        opacity: 0.8;
        background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div id="box">

        <h1>Cadastro</h1>
        
        <form action="cadastro.php" method="post">
            <label for="usuario">Nome</label>
            <input type="text" name="usuario">

            <label for="idade">Idade</label>
            <input type="number" name="idade">
            
            <label for="senha">Senha</label>
            <input type="password" name="senha">          
            <button type="submit">Cadastre-se</submit>
            </form>
    </div>
    
</body>
</html>