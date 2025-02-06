<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>

<body>
    <?php 
    class ContaBanco {
        // atributos
        public $numconta;
        protected $Tipo;
        private $Dono;
        private $Saldo;
        private $Status;
        // metodos
        public function abrirConta($t) {
            $this-> setTipo($t);
            $this-> setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ( $t == "CP") {
                $this->saldo= 150;
            }
            
        }

        public function fecharConta() {
            if ($this->getSaldo()>0) {
                echo "Conta ainda tem dinheiro, não posso fechala.";
            } elseif ($this->getSaldo() <0) {
                echo "Conta está em débito, impossivel encerrar.";
            } else {
                $this->setStatus(false);
            }
        }
        
        public function depositar($v) {
            if($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() + $v);
                echo"Deposito de R$$v na conta de".$this->getDono();
            }
             else {
                echo "Conta fechada, não consigo depositar.";
            }
        }

        public function sacar($v) {
            if ($this->getStatus()) {
                if($this->getSaldo() > $v) {
                    $this->saldo = $this->saldo - $v;
                    echo"Saque de R$ $v autorizado na conta de." . $this->getDono();
                } else {
                    echo "Saldo insuficiente para saque.";
                }
            } else {
                echo "Não posso sacar de uma conta fechada.";
            }
        }
        
        public function pagarMensal(){
            if ($this->getTipo()== "CC") {
                $v = 12;
            } else if ($this->getTipo()=="CP") {
                $v= 20;
            }
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
                echo"Mensalidade de R$ $v debitada na conta de". $this->getDono();
                
            } else { 
                echo "Problemas com a conta, não posso cobrar.";
            }
        }
        //Metodos especiais 
        function __construct() {
            $this->setSaldo(0);
            $this->setSaldo(false);
            echo "Conta criada com sucesso!";
        }

        function getnumConta() {
            return $this->numconta;
            
        }

        function setnumConta($n) {
            $this->numconta=$n;
        }
    
    
        }
    
    
?>
</body>

</html>