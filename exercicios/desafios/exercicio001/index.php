<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <?php 
        $valor1 = $_GET['div'];
        $valor2 = $_GET['visor'];
        ?>
        <p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo:</label>
            <input type="number" name="div" id="idiv">
            <label for="visor">Divisor:</label>
            <input type="number" name="visor" id="idv">
            <input type="submit" value="Analisar">
        </form>
        </p>
    </main>
    <section>
        <h1>Estrutura da Divisão</h1>
        <?php 
        $divisao = $valor1 / $valor2;
        $resto = $valor1 % $valor2;
        echo "O valor do cálculo de<strong> $valor1</strong> dividido por <strong>$valor2</strong> é igual a <strong>$divisao</strong>.</br>";
        echo "O valor de <strong>$divisao x $valor2</strong> é igual a <strong>$valor1</strong>.</br>";
        echo "O resto da divisão de<strong> $divisao</strong> é <strong>$resto</strong>.";
        ?>
    </section>
</body>

</html>