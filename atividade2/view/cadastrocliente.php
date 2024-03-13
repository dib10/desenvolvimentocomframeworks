<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body id="fundomenu">
    <form action="../model/inserircliente.php" method = "POST">
        Nome:
        <input type="text" name="cxnome" required> <br>

        Email:
        <input type="text" name="cxemail" required> <br>

        <input type="submit" value="Gravar"> <br>
    </form>
    <a href="../model/listarcliente.php">Listar Clientes</a> <br>

    <a href="../index.php">Voltar</a> <br>
</body>
</html>