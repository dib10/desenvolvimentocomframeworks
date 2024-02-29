<?php

if($_POST['cxproduto']!="")
{
    include_once '../factory/conexao.php';
    $produto = $_POST['cxproduto'];
    $datavalidade = $_POST['cxdata'];
    $quantidade = $_POST['cxqtd'];
    $valor = $_POST['cxvalor'];
    $sql = "INSERT INTO tbproduto (produto  ,datavalidade, qtde, valor ) values ('$produto','$datavalidade','$quantidade','$valor')";
    $query = mysqli_query($conn,$sql);
    echo "Dados cadastrados com sucesso";
}
else
{
    echo "Dados não cadastrados";
}
?>




