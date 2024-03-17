<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" href="../img/produtos.png">

    <title>Exibir Produto</title>
</head>
<body id="formulario">
    <?php
    include_once '../factory/conexao.php';
    $consultar = "select *from tbproduto";
    $executar = mysqli_query($conn, $consultar);
    while($linha = mysqli_fetch_array($executar))
    {
    ?>
    <section>
    <form>
        <hr>
    <div class="client-group">
    <div class="input-group">
        <label id="produtoform">Produto:</label>
        <input type="text" name="cxproduto" disabled value="<?php echo $linha['produto']?>" required class="caixaformulario">
    </div>
    <br>
    <div class="input-group">
        <label id="dataform">Data de validade:</label>
        <input type="date" name="cxdata" disabled value="<?php echo $linha['datavalidade']?>" required class="caixaformulario">
    </div>
    <br>
    <div class="input-group">
        <label id="qtdeform">Quantidade:</label>
        <input type="number" name="cxqtde" disabled value="<?php echo $linha['qtde']?>" required class="caixaformulario">

    </div>
    <br>
    <div class="input-group">
        <label id="valorform">Valor:</label>
        <input type="text" name="cxvalor" disabled value="<?php echo $linha['valor']?>" required class="caixaformulario">
    </div>
    <br>
    <a href="excluirproduto.php?id=<?php echo $linha['codigo']; ?>" id="botaosubmit" style="margin-left: 10px;">Excluir</a></div>
        <br>
    </form>
    
    <?php
        }
    ?>

</body>
<br>
<div class="input-group">
<a href="../view/telamenu.php" id="botaosubmit">Voltar </a>


</div>






</html>