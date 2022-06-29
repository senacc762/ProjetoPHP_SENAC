<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CMT</title>
    <style>
        body{
            font-family: arial;
            text-align: center;
            color: white;
            background: linear-gradient(to right, #4856a2, #262626)
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            padding: 10px;
            border-radius: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Seja bem vindo</h1>
    <h2>Entre ou Cadastre-se</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastro</a>
    </div>      
</body>
</html>