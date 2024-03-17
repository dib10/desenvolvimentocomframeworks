<?php

include_once '../factory/conexao.php';
$cod = $_GET["id"];
$excluir = "delete from tbproduto where codigo='$cod'";
$executar = mysqli_query($conn,$excluir);

if($executar)
{
    echo "<script > alert('Produto excluído com sucesso')</script>";


}
else
{
    echo "<script >
        alert('Dado não encontrado');
    </script>";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" href="../img/excluir.png">

</head>
<body id="excluirclientefundo">
<div id="exclusaoconcluida">
    <h1>Exclusão concluída!</h1>
    <a href="listarproduto.php" id="botaosubmit">Voltar</a>
</div>


</div>
    
</body>
</html>
