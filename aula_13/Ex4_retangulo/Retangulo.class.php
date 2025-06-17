<?php

    class Retangulo{
        private $Altura;
        private $Largura;

        public function __construct($altura, $largura) {
            $this->Altura = $altura;
            $this->Largura = $largura;
        }


        public function getAltura(){
            return $this->Altura;
        }
        
        public function getLargura(){
            return $this->Largura;
        }
        
        public function calcularArea(){
            $area = $this->Altura * $this->Largura;
            return $area;
        }

        public function calcularPerimetro(){
            $perimetro = ($this->Altura * 2) +  ($this->Largura * 2);
            return $perimetro;
        }
    }


?>