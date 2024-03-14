<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir cliente</title>
</head>
<body>
    <?php
        include_once '../factory/conexao.php';
        $consultar = "SELECT * FROM tbproduto";
        $executar = mysqli_query($conn, $consultar);
        while($linha = mysqli_fetch_array($executar))
        {
    ?>
    <form action="">
        <br>
        Produto:
        <input type="text" name="cxproduto" value="<?php echo $linha['produto'] ?>" disabled><br>
        Data de validade:
        <input type="date" name="cxdatadevalidade" value="<?php echo $linha['datavalidade'] ?>" disabled><br>
        Quantidade:
        <input type="number" name="cxquantidade" value="<?php echo $linha['quantidade'] ?>" disabled><br>
        Valor:
        <input type="number" name="cxevalor" value="<?php echo $linha['valor'] ?>" disabled><br><br>
    </form>
    <?php 
        }
    ?>
</body>
</html>