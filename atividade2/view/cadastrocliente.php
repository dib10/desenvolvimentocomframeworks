<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Cliente</title>
</head>

<body id="formulario">
    <section>
    <form action="../model/inserircliente.php" method = "POST">
<div class="input-group">
<h1>Cadastro de Cliente</h1>

    <label id="nomeform">Nome:</label>
    <input type="text" name="cxnome" required class="caixaformulario">
</div>
<br><br>
<div class="input-group">
    <label id="emailform">Email:</label>
    <input type="text" name="cxemail" required class="caixaformulario">
    <br>
    <input type="submit" value="Cadastrar" id="botaogravar">

</div>
</body>
</html>