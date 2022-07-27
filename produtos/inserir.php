<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css" />
    <title>Cadastro</title>
</head>
<body>
    <a href="../index.php">Voltar</a>
    <div id="box">

        <h1>Inserir produto</h1>
        
        <form action="cadastroprod.php" method="post">
            <label for="produto">Nome</label>
            <input type="text" name="produto">

            <label for="marca">Marca</label>
            <input type="text" name="marca">

            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" class="form-select" aria-label="Default select example">
                <option selected>Selecione uma opção</option>
                <option value="bebida">Bebida</option>
                <option value="comida">Comida</option>
                <option value="tabaco">Tabaco</option>
                <option value="vestuario">Vestuário</option>
            </select>

            <label for="valor">Preço</label>
            <input type="number" onchange="setTwoNumberDecimal" min="0" step="0.25" value="0.00" name="valor">
                      
            <button type="submit">Inserir</submit>
            </form>
    </div>
    
</body>
</html>