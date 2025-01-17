<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP 07</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php ?>
        <h1>Somando valores</h1>
        <?php 
        $valor1=$_GET['v1']??0;
        $valor2=$_GET['v2']??0;
        
        ?>
        <p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Informe um valor:</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
            <label for="v2">Informe outro valor:</label>
            <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
        </p>
        <section>
            <?php 
            $soma = $valor1 + $valor2;
            print "A soma dos dois valores sendo eles $valor1 + $valor2 é = <strong>$soma</strong>";
            
            
?>

        </section>

    </main>
</body>

</html>