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
         require_once 'pessoa.php';
         class Livro  {
            private $titulo;
            private $autor;
            private $totPaginas;
            private $pagAtual;
            private $aberto;
            private $leitor;
            // Funções
            public function detalhes() {
                echo  ' Livro ' . $this->titulo . ' escrito por ' . $this->autor;
                echo ' Paginas: ' . $this->totPaginas;
                echo ' Sendo lido por ' . $this->leitor->getNome() . '';
                
            }
            public function __construct($titulo,$autor,$totPaginas,$leitor)
            { 
              $this->titulo = $titulo;
              $this->autor = $autor;
              $this->totPaginas = $totPaginas;
              $this->aberto= false;
              $this->pagAtual=0;
              $this->leitor = $leitor;
                
            }
            // Getters 
            function gettitulo(){
                return $this->titulo;
            }
            function getautor(){
                return $this->autor;
            }
            function gettotPaginas(){
                return $this->totPaginas;
            }
            function getpagAtual(){
                return $this->pagAtual;
            }
            function getaberto(){
                return $this->aberto;
            }
            function getleitor(){
                return $this->leitor;
            }
            // Setters
            function settitulo($titulo){
                $this->titulo=$titulo;
            }
            function setautor($autor){
                $this->autor=$autor;
            }
            function setPaginas($totPaginas){
                $this->totPaginas=$totPaginas;
            }
            function setpagAtual($pagAtual){
                $this->pagAtual=$pagAtual;
            }
            function setaberto($aberto){
                $this->aberto=$aberto;
            }
            function setleitor($leitor) {
                $this->leitor=$leitor;
            }
            // Publicacao 
            public function abrir(){
                $this->aberto=true;
            }
            public function fechar(){
                $this->aberto=false;
            }
            public function folhear($p){
                if($p>$this->totPaginas) {
                    $this->pagAtual=0;
                } else {
                    $this->pagAtual=$p;
                }
            }
            public function avancarPag(){
                $this->pagAtual ++;
            }
            public function voltarPag(){
                $this->pagAtual --;
            }
        }

?>
    </main>
</body>

</html>