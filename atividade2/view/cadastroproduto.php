<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Produtos</h1>
    <form action="../model/inserirproduto.php" method = "POST">
        Produto:
        <input type="text" name="cxproduto" required> <br>

        Data de validade:
        <input type="date" name="cxdata" required> <br>

        Quantidade:
        <input type="number" name="cxqtd" required> <br>

        Valor:
        <input type="decimal" name="cxvalor" required> <br>

        <input type="submit" value="Gravar"> <br>
    </form>
    <a href="../index.php">Voltar</a>
    
</body>
</html>