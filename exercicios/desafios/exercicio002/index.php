<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="style.css">
</head>

<!--number_format($num,3, ",", ".")
    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    numfmt_format_currency($padrao,$valor,"BRL") -->

<body>
    <main>
        <?php 
        $salario = $_GET['salario'];
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$):</label>
            <input type="number" name="salario" id="idsal">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong>.</p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado final:</h1>
        <?php 
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        $minimo = 1380;
        $quantidade_salarios = $salario / $minimo;
        $resto = $salario % $minimo;
        $inteiro = (int)$quantidade_salarios;
        echo "Quem recebe um salário de " .numfmt_format_currency($padrao,$salario,"BRL").  " <br/>recebe <strong>$inteiro salários mínimos</strong> + " . numfmt_format_currency($padrao,$resto,"BRL"). ".";
        ?>

    </section>
</body>

</html>