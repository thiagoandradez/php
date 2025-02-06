<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>
            Resultado:
        </h1>
    </header>
    <main>
        <?php
        $numero= $_GET["numero"] ?? "sem numero";
        $soma= $numero + 1;
        $subtracao = $numero -1;
        echo "Seu número escolhido é <strong>$numero</strong></br>";
        echo "Seu número sucessor é <strong>$soma</strong></br>";
        echo "Seu número antecessor é <strong>$subtracao</strong></br>";
        
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>

</html>