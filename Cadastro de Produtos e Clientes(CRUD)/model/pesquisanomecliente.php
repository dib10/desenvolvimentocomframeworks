<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" href="../img/cliente.png">
    <title>Exibir cliente</title>
</head>
<body id="formulario">
    <form action="pesquisanomecliente.php" method="POST">
        <h2>Pesquisa por nome</h2>
        <br>
        <input type="text" name="cxpesquisacliente" required class="caixaformulario">
        <input type="submit" value="Pesquisar" id="botaosubmit">
        <a href="../view/telamenu.php" id="botaosubmit">Voltar</a>
    </form>

    <?php
        include_once '../factory/conexao.php';
        if (isset($_POST['cxpesquisacliente'])) {
            $pesquisanome = $_POST['cxpesquisacliente'];
            $consultar = "SELECT * FROM tbcliente WHERE nome='$pesquisanome'";
            $executar = mysqli_query($conn, $consultar);
            while($linha = mysqli_fetch_array($executar))
            {
    ?>
    <section>
        <form action="" method="post">
            <div class="client-group">
                <div class="input-group">
                    <label id="nomeform">Nome:</label>
                    <input type="text" name="cxnome" value="<?php echo $linha['nome'] ?>" disabled class="caixaformulario">
                </div>
                <div class="input-group">
                    <label id="emailform">Email:</label>
                    <input type="text" name="cxemail" value="<?php echo $linha['email'] ?>" disabled class="caixaformulario">
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
