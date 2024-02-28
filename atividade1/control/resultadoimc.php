<?php
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc =  $peso / ($altura *$altura );
    $resultado= "";
    if ($imc <18.9) {
      $resultado =  "Magreza";
    }
    else if($imc >=18.9 && $imc <=24.9){
      $resultado = "Normal";
    }
    else if($imc >=25.0 && $imc <=29.9){
      $resultado = "Sobrepeso";
    }
    else if($imc >=30.0 && $imc <=39.9){
      $resultado = "Sobrepeso";
    }
    else if($imc >40.0){
      $resultado = "Obesidade Grave";
    }

    echo "<h1>$nome, seu IMC é:  <br></h1>";
    echo "<h2>$imc <br></h2>";
    echo "<h3>Classificamos como: $resultado</h3>";
?>
<form action="../model/inserircliente.php" method="post" onsubmit="return showPopup()">
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="peso" value="<?php echo $peso; ?>">
    <input type="hidden" name="altura" value="<?php echo $altura; ?>">
    <input type="hidden" name="imc" value="<?php echo $imc; ?>">
    <input type="hidden" name="resultado" value="<?php echo $resultado; ?>">
    <input type="submit" value="Enviar">
</form>

<script>
function showPopup() {
    alert("Cadastro realizado");
    return true;
}
</script>