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
            background: linear-gradient(to right, #4856a2, #25525525);
            font-family: arial;
            padding:20px;
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
            height: 600px;
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
        text-decoration: none;
        margin-top: 15px;
        background-color: rgba(0, 0, 0, 0);
        color: white;
        border: 3px solid dodgerblue;
        padding: 10px;
        border-radius: 5px;
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

        <h1>Inserir produto</h1>
        
        <form action="cadastroprod.php" method="post">
            <label for="produto">Nome</label>
            <input type="text" name="produto">

            <label for="marca">Marca</label>
            <input type="text" name="marca">

            <label for="modelo">Modelo</label>
            <input type="text" name="modelo">

            <label for="valor">Preço</label>
            <input type="number" onchange="setTwoNumberDecimal" min="0" step="0.25" value="0.00" name="valor">
                      
            <button type="submit">Inserir</submit>
            </form>
    </div>
    
</body>
</html>