<?php

if($_POST['cxproduto']!="")
{
    $message = "Dados cadastrados com sucesso!";
    include_once '../factory/conexao.php';
    $produto = $_POST['cxproduto'];
    $datavalidade = $_POST['cxdata'];
    $quantidade = $_POST['cxqtd'];
    $valor = $_POST['cxvalor'];
    $sql = "INSERT INTO tbproduto (produto  ,datavalidade, qtde, valor ) values ('$produto','$datavalidade','$quantidade','$valor')";
    $query = mysqli_query($conn,$sql);
}
else
{
    $message = "Dados não cadastrados !";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $message; ?></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body id="excluirclientefundo">
<div id="exclusaoconcluida">
    <h1><?php echo $message; ?></h1>
    <a href="listarproduto.php" id="botaosubmit">Voltar</a>
</div>
    
</body>
</html>




