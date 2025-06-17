<?php

    class Funcionario{
        private $Nome;
        private $Salario;
        private $Aumento;

        public function __construct($nome, $sal, $aumento){
            $this->Nome = $nome;
            $this->Salario = $sal;
            $this->Aumento = $aumento;
        }
    
    
        public function getNome(){
            return $this->Nome;
        }
    
        public function getSalario(){
            return $this->Salario;
        }

        public function getAumento(){
            return $this->Aumento;
        }
    
    
        public function aumentarSal() {
            $this->Salario += $this->Salario * $this->Aumento;
        }

        public function exibirInformacoes(){

            return "Nome do Funcionário: {$this->Nome} <br> Salário: {$this->Salario}";
        } 
    }

?>