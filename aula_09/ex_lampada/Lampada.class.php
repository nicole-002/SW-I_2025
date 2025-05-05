<?php

    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this -> Status = True;

        }
        public function Desligar(){
            $this -> Status = False;
        }
        public function MostrarDados(){
            echo "Fabricante: " . $this -> Fabricante . "<br>";
            echo "Tensão: " . $this -> Tensao . "<br>";
            echo "Potência: " . $this -> Potencia . "<br>";
            echo "Cor: " . $this -> Cor . "<br>";

            if ($this-> Status == True){
                echo "Está ligada: sim";
            }else{
                echo "Esta ligada: não";
            }
                        
        }
    }

?>