<?php

    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo,$autor,$disp){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disp;
        }

        public function Emprestar(){
            if($this->Disponivel == true){
                $this->Disponivel = false;
            }else{
                echo "O livro não está disponível no momento";
            }            
        }
        
        public function Devolver(){
            $this->Disponivel = true;
            echo "Obrigado pela devolução!";
        }

        public function getTitulo(){
            return $this->Titulo;
        }
        public function getDisponivel(){
            return $this->Disponivel;
        }

        public function ExibirStatus(){
            $titulo_livro = $this->getTitulo();

            if($this->getDisponivel() == true){
                $disponivel_livro = "Disponível";                
            }else{
                $disponivel_livro = "Emprestado";
            }
            
            return "Livro: $titulo_livro <br> Status: $disponivel_livro";
            
        }
    }

?>