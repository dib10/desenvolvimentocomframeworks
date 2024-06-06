<?php
include_once "../aula_hoje/control/dadogeral.php";
class cadProfessor extends dadogeral
{
    public $materia = "PHP - PO0";

        public function exibirprofesor()
        {
            $nome = "Anselmo";
            $idade = 45;
            echo "Professor: ".$nome."Idade ".$idade;
        }
}
?>