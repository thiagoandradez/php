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
         require_once 'livro.php';
         class Pessoa {
            private $nome;
            private $idade;
            private $sexo;
            //Funções
            public function fazerAniversario() {
                $this->idade ++;
            }
            public function __construct($nome,$idade,$sexo)
            {
                $this->nome= $nome;
                $this->idade=$idade;
                $this->sexo=$sexo;
            }
            // Getters
            function getNome(){
                return $this->nome;
            }
            function getIdade(){
                return $this->idade;
            }
            function getSexo(){
                return $this->sexo;
            }
            // Setters
            function setNome($nome){
                $this->nome=$nome;
            }
            function setIdade($idade){
                $this->idade=$idade;
            }
            function setSexo($sexo){
                $this->sexo=$sexo;
            }

        }

?>
    </main>
</body>

</html>