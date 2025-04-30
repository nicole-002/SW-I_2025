<?php
    
    class Pessoa{
        //ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;

        //MÉTODOS
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O peso é: " . $this->Peso . "<br>";
            echo "O altura é: " . $this->Altura . "<br><hr>";
        }

        public function Apresentar(){
            echo "Oi, meu nome é ". $this->Nome .", tenho ". $this->Altura ." cm de altura, e peso ". $this->Peso ." kg. 👨<br><hr>";
        }

    }


?>