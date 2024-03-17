<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Exibir Produto</title>
</head>
<body id="formulario">
    <?php
    include_once '../factory/conexao.php';
    $consultar = "SELECT * FROM tbproduto";
    $executar = mysqli_query($conn,$consultar);
    while($linha = mysqli_fetch_array($executar))
    {
    ?>  
    <section>
    <form  >
    <div class="client-group">
    <div class="input-group">
        <label id="nomeform">Nome:</label>
        <input type="text" name="cxnome" disabled value ="<?php echo $linha['nome']?>" required class="caixaformulario">
    </div>
    <div class="input-group">
        <label id="descricaoform">Descrição:</label>
        <input type="text" name="cxdescricao" disabled value ="<?php echo $linha['descricao']?>" required class="caixaformulario">
    </div>
    <a href="excluirproduto.php ?id=<?php echo $linha['cod']; ?>" style="margin-left: 10px;">Excluir</a>
</div>
        <br>
    </form>
    <?php
    }
    ?>  
</body>
</html>