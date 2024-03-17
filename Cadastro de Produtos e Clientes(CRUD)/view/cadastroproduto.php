<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" href="../img/produtos.png">

    <title>Cadastro de Produto</title>
</head>

<body id="formulario">
    <section>
    <form action="../model/inserirproduto.php" method = "POST">
        <div class="input-group">
            <h1>Cadastro de Produto</h1>

            <label id="produtoform">Produto:</label>
            <input type="text" name="cxproduto" required class="caixaformulario">
        </div>
        <br><br>
        <div class="input-group">
            <label id="dataform">Data de validade:</label>
            <input type="date" name="cxdata" required class="caixaformulario">
        </div>
        <br><br>
        <div class="input-group">
            <label id="qtdform">Quantidade:</label>
            <input type="number" name="cxqtd" required class="caixaformulario">
        </div>
        <br><br>
        <div class="input-group">
            <label id="valorform">Valor:</label>
            <input type="decimal" name="cxvalor" required class="caixaformulario">
            <input type="submit" value="Cadastrar" id="botaosubmit">
            <a href="telamenu.php" id="botaosubmit">Voltar </a>

        </div>
        <br>
    </form>
</body>
</html>