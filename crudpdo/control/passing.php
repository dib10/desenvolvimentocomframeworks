<?php
    require_once "dadogeral.php";
    class Passing extends DadoGeral
    {
        public function setNome($nm)
        {
            $this->nome = $nm;
        }

        public function setTelefone($tl)
        {
            $this->telefone = $tl;
        
        }

        public function setEmail($em)
        {
            $this->email = $em;
        
        }


        public function getNome()
        {
            return $this->nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        
        }

        public function getEmail()
        {
            return $this->email;
        
        }




    }






?>