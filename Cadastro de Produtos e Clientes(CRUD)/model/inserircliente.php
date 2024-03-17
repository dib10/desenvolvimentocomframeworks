<?php
$message = "";
if($_POST['cxnome']!="")
{
    include_once '../factory/conexao.php';
    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $sql = "INSERT INTO tbcliente (nome,email) values ('$nome','$email')";
    $query = mysqli_query($conn,$sql);
    $message = "Dados cadastrados com sucesso!";
}
else
{
    $message = "Dados não cadastrados!";
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
    <a href="listarcliente.php" id="botaosubmit">Voltar</a>
</div>
    
</body>
</html>