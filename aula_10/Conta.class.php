
    <?php
    class Conta{
        public $Nome;
        public $cpf;
        private $Saldo;

        function Sacar($valor){

            if($this->Saldo<$valor){
                return "Saldo Insufuciente!";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $texto = "Saldo realizado!. Saldo atual: R$" . $this->Saldo;  
                return $texto;
            }           
        }

        public function Depositar($valor){
            $this -> Saldo += $valor;
            $texto = "Depósito realizado!. Saldo atual: R$" . $this->Saldo;            
            
            return $texto;
        }

        public function MostrarSaldo(){

            $this->Saldo;

            echo "Nome: " . $this->Nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "Saldo disponivel: " . $this->Saldo . "<br>";
        }

    }
