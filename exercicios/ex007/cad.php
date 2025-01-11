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
            Conversor de Moedas v1.0
        </h1>
    </header>
    <main>
        <?php
        $valor = $_GET["valor"];
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        $cotacao = 6.05;
        $dolar = $valor / $cotacao;
        echo "<p>Seus " . numfmt_format_currency($padrao,$valor,"BRL")." equivalem a " . numfmt_format_currency($padrao, $dolar , "USD") . "</p>";
       
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>

</html>