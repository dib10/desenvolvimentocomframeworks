<?php

include_once '../factory/conexao.php';
$cod = $_GET["id"];
$excluir = "delete from tbcliente where cod='$cod'";
$executar = mysqli_query($conn,$excluir);

if($executar)
{
    echo "<script > alert('Cliente excluído com sucesso')</script>";
    echo "<a href='listarcliente.php'>Voltar</a>";


}
else
{
    echo "<script >
        alert('Dado não encontrado');
    </script>";
}








?>