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
         class Lutador {
            private $nome;
            private $nacionalidade;
            private $idade;
            private $altura;
            private $peso;
            private $categoria;
            private $vitorias;
            private $derrotas;
            private $empates;

            public function apresentar() {
                echo "<br>------------------------------------<br>";
                echo " Chegou a hora ! o Lutador " . $this->getNome();
                echo " Veio diretamente de " . $this->getNacionalidade();
                echo " Tem " . $this->getIdade() . " anos e peso " . $this->getPeso() . " Kg ";
                echo " Ele tem " . $this->getVitorias() . " vitorias";
                echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates ";
            }

            public function Status() {
                echo "<br>------------------------------------<br>";
                echo $this->getNome() . " é um peso " . $this-> getCategoria();
                echo " e ja ganhou " . $this->getVitorias() . " vezes "; 
                echo " perdeu " . $this->getDerrotas() . " vezes e ";
                echo " empatou " . $this->getEmpates() . " vezes! ";
            }

            public function ganharLuta() {
                $this->setVitorias($this->getVitorias() +1);
            }
            
            public function perderLuta() {
                $this->setDerrotas($this->getDerrotas() +1);
            }

            public function empatarLuta() {
                $this->setEmpates($this->getEmpates() +1);
            }

            public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em)
            {
                $this->nome=$no;
                $this->nacionalidade=$na;
                $this->idade=$id;
                $this->altura=$al;
                $this->setPeso($pe);
                $this->vitorias=$vi;
                $this->derrotas=$de;
                $this->empates=$em;
                
                
            }

           public function getNome(){
            return $this->nome;
           }

           public function setNome($no){
            $this->nome=$no;
           }

           public function getPeso(){
            return $this->peso;
           }
           private function setCategoria(){
            if ($this->peso <52.2) {
                $this->categoria="invalido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria="leve";
            } elseif($this->peso <=83.9) {
                $this->categoria="médio";
            }elseif($this->peso <=120.2) {
                $this->categoria="pesado";
            }else {
                $this->categoria="invalido";
            }
           }
           public function setPeso($pe){
            $this->peso=$pe;
            $this->setCategoria();
           }
          
           public function getCategoria(){
            return $this->categoria;
           }

           public function getNacionalidade(){
            return $this->nacionalidade;
           }

           public function setNacionalidade($na){
            $this->nacionalidade=$na;
           }

           public function getIdade(){
            return $this->idade;
           }
           public function setIdade($id) {
            $this->idade=$id;
           }
           public function getAltura() {
            return $this->altura;
           }
           public function setAltura($al){
            $this->altura=$al;
           }
           public function getVitorias(){
            return $this->vitorias;

           }
           public function setVitorias($vi){
            $this->vitorias=$vi;
           }
           public function getDerrotas(){
            return $this->derrotas;
           }
           public function setDerrotas($de){
            $this->derrotas=$de;
           }
           public function getEmpates(){
            return $this->empates;
           }
           public function SetEmpates($em){
            $this->empates=$em;
           }


        }

?>
    </main>
</body>

</html>