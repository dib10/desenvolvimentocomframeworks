<?php
    require_once '../factory/conexao.php';

    session_start();
    // Verifica se o formulário foi submetido
    if (isset($_POST['nome'])) {
        //  processa os dados do form
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $_POST['imc'];
        $resultado = $_POST['resultado'];

        // Prepara para inserir dados na tabela 
        $cadastrar = $pdo->prepare("INSERT into pessoas (nome,peso,altura, imc,resultado) VALUES (:nome,:peso,:altura,:imc,:resultado)");

        // Vincula os valores aos parâmetros da declaração preparada
        $cadastrar->bindValue(':nome', $nome);
        $cadastrar->bindValue(':peso', $peso);
        $cadastrar->bindValue(':altura', $altura);
        $cadastrar->bindValue(':imc', $imc);
        $cadastrar->bindValue(':resultado', $resultado);

        // Executa a declaração
        if ($cadastrar->execute()) {
            echo "Novo registro criado com sucesso!";
            header('Location: ../view/imc.html');
        } else {
            echo "Erro ao criar registro";
        }
    }
?>