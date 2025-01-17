<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP 06</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $preco = $_GET['preco'];
    $porcentual = $_GET['por'];
    ?>

    <!--  -->
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="idpreco" value="<?=$preco?>">
            <label for="por">
                Qual será o percentual de reajuste ?(<strong><span id="p">?</span>%</strong>) </label>
            <input type="range" name="por" id="idpor" min="0" max="100" step="1" oninput="mudaValor()"
                value="<?=$porcentual?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste:</h2>
        <?php 
        $padrao1 = number_format($preco,1, ",", ".");
        $reajuste = $preco + ($preco * ($porcentual / 100));
        $padrao2 = number_format($reajuste,2, ",", ".");
        
        echo "O produto que custava $padrao1, com <strong>$porcentual% de aumento</strong> vai passar a custa R$$padrao2 a partir de agora.";
        ?>
    </section>
    <script>
    mudaValor()

    function mudaValor() {
        p.innerText = idpor.value
    }
    </script>
</body>

</html>