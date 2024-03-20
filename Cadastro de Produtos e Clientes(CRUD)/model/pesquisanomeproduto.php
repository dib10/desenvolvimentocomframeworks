<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" href="../img/cliente.png">
    <title>Exibir Produto</title>
</head>
<body id="formulario">
    <form action="pesquisanomeproduto.php" method="POST">
        <h2>Pesquisar Produto</h2>
        <br>
        <input type="text" name="cxpesquisaproduto" required class="caixaformulario">
        <input type="submit" value="Pesquisar" id="botaosubmit">
        <a href="../view/telamenu.php" id="botaosubmit">Voltar</a>
    </form>
    <?php
        include_once '../factory/conexao.php';
        if (isset($_POST['cxpesquisaproduto'])) {
            $pesquisanome = $_POST['cxpesquisaproduto'];
                    $consultar = "SELECT * FROM tbproduto WHERE produto='$pesquisanome'";
                    $executar = mysqli_query($conn, $consultar);
                    while($linha = mysqli_fetch_array($executar))
                    {
    ?>
    <section>
        <form action="" method="post">
            <div class="client-group">
                <div class="input-group">
                    <label id="nomeform">Produto:</label>
                    <input type="text" name="cxproduto" value="<?php echo $linha['produto'] ?>" disabled class="caixaformulario">
                </div>
                <div class="input-group">
                    <label id="emailform">Data Validade:</label>
                    <input type="text" name="cxdata" value="<?php echo $linha['datavalidade'] ?>" disabled class="caixaformulario">
                </div>
                <div class="input-group">
                    <label id="emailform">Quantidade:</label>
                    <input type="text" name="cxqtde" value="<?php echo $linha['qtde'] ?>" disabled class="caixaformulario">
                </div>
                <div class="input-group">
                    <label id="emailform">Valor:</label>
                    <input type="text" name="cxvalor" value="<?php echo $linha['valor'] ?>" disabled class="caixaformulario">
                </div>
            </div>
            <br>
        </form>
        
        <br>
    </section>
    <?php 
            }
        }
    ?>
</body>
</html>
