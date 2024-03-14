<?php

include_once '../factory/conexao.php';
$cod = $_GET["id"];
$excluir = "delete from tbproduto where codigo='$cod'";
$executar = mysqli_query($conn,$excluir);

if($executar)
{
    echo "<script > alert('Produto excluído com sucesso')</script>";
    echo "<a href='listarproduto.php'>Voltar</a>";


}
else
{
    echo "<script >
        alert('Dado não encontrado');
    </script>";
}


?>