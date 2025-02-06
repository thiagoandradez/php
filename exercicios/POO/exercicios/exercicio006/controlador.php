<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controlador PHP</title>
</head>

<body>
    <main>
        <?php 
        
        interface Controlador {
        public function ligar ();
        public function desligar ();
        public function abrirMenu ();
        public function fecharMenu ();
        public function maisVolume ();
        public function menosVolume ();
        public function ligarMudo ();
        public function desligarMudo ();
        public function play ();
        public function pause ();
}

?>
    </main>
</body>

</html>