<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir cliente</title>
</head>
<body>
    <?php
        include_once '../factory/conexao.php';
        $pesquisanome = $_POST['cxnome'];
        $consultar = "SELECT * FROM tbcliente WHERE nome='$pesquisanome'";
        $executar = mysqli_query($conn, $consultar);
        while($linha = mysqli_fetch_array($executar)){
    ?>
    <form >
        <br>
        Nome:
        <input type="text" name="cxnome" value="<?php echo $linha['nome'] ?>" disabled><br>
        E-mail:
        <input type="text" name="cxemail" value="<?php echo $linha['email'] ?>" disabled><br><br>    
    </form>
    <?php 
        }
    ?>
    <br>
    <a href="../view/cadastrocliente.php">Voltar</a>
</body>
</html>