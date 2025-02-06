<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require PHP</title>
</head>

<body>
    <main>
        <?php 
        require_once 'controlador.php';
        
        class ControleRemoto {
            private $volume;
            private $ligado;
            private $tocando;
            function __construct()
            {
                $this->volume = 50;
                $this->ligado=false;
                $this->tocando=false;
            }
            function getVolume(){
                return $this->volume; 
            }
            function getLigado(){
                return $this->ligado; 
            }
            function getTocando(){
                return $this->tocando; 
            }
            function setVolume($volume){
                $this->volume = $volume;
            }
            function setLigado($ligado){
                $this->ligado = $ligado;
            }
            function setTocando($tocando){
                $this->tocando = $tocando;
            }

            public function ligar () {
                $this->setligado(true);
            }
            public function desligar (){ 
                $this->setligado(false);
            }
            public function abrirMenu (){ 
                echo "<br>Está ligado? <br>" . ($this->getLigado()? "SIM": "NÃO");
                echo "<br>Está tocando? <br>" . ($this->getTocando()? "SIM": "NÃO");
                echo "<br>Volume:<br>" . $this->getVolume();
                for($i=0; $i <= $this->getVolume(); $i+=10) {
                    echo "I";
                }
                echo "<br>";
            }
            public function fecharMenu (){ 
                echo "<br> Fechando Menu...";
            }
            public function maisVolume (){ 
                if ($this->getLigado()) {
                    $this->setVolume($this->getVolume() +5);
                }
            }
            public function menosVolume (){ 
                if ($this->getLigado()) {
                    $this->setLigado($this->getVolume() -5);
                }
            }
            public function ligarMudo (){ 
                if ($this->getLigado() && $this->getVolume()>0 ){
                    $this->setVolume(0);
                }
            }
            public function desligarMudo (){ 
                if ($this->getLigado() && $this->getVolume()== 0 ){
                    $this->setVolume(50);
                }
            }
            public function play (){ 
                if ($this->getLigado() && !($this->getTocando()) ){
                    $this->setTocando(true);
                }
            }
            public function pause (){ 
                if ($this->getLigado() && $this->getTocando() ){
                    $this->setTocando(false);
                }
            }



















        }

?>
    </main>
</body>

</html>