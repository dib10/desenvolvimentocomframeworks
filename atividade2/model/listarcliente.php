<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Cliente</title>
</head>
<body>
    <?php
    include_once '../factory/conexao.php';
    $consultar = "SELECT * FROM tbcliente";
    $executar = mysqli_query($conn,$consultar);
    while($linha = mysqli_fetch_array($executar))
    {

    
    ?>  

    <form >
        <br>
        Nome:
        <input type="text" name="cxnome"  disabled value ="<?php echo $linha['nome']?>" required> <br>
        

        Email:
        <input type="text" name="cxemail" disabled value ="<?php echo $linha['email']?>" required> <br>

        <a href="excluircliente.php?id=<?php echo $linha['cod']; ?>" >x</a>

    </form>
    <?php
}
?>  

    
</body>
</html>