<?php
include_once "../control/passing.php";
include_once "../factory/conexao.php";

$dados = new Passing;

$dados->setNome($_POST["cxnome"]);
$dados->setEmail($_POST["cxemail"]);
$dados->setTelefone($_POST["cxtelefone"]);

$nome = $dados->getNome();
$email = $dados->getEmail();
$telefone = $dados->getTelefone();

if($dados->getNome() != "")
{
$conn = new Caminho;
$query = "insert into tbcliente(nome,email,telefone)
values (:nome,:email, :telefone)";
$cadastrar = $conn->getConn()->prepare($query);
$cadastrar->bindParam(':nome',$nome,PDO::PARAM_STR);
$cadastrar->bindParam(':email',$email,PDO::PARAM_STR);
$cadastrar->bindParam(':telefone',$telefone,PDO::PARAM_STR);

$cadastrar->execute();
if($cadastrar->rowCount())
{
echo "Dados cadastrado com sucesso!";
}
else{
echo "Dados não cadastrado";
}
}
else
{
"Campos em branco";
}



?>