<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
</head>

<body>
    <main>

        <h1>Controle remoto</h1>
        <?php
            require_once 'require.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();
            ?>

    </main>
</body>

</html>