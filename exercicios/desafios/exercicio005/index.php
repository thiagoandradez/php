<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP 005</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $ano = $_GET['ano'];
    $prev = $_GET['prev'];
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="idano" value="<?=$ano?>">
            <label for="prev">Quer saber a sua idade em que ano ? </label>
            <input type="number" name="prev" id="" value="<?=$prev?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $res = $prev - $ano;
        echo "Quem nasceu em $ano vai ter $res anos em $prev!";
        ?>
    </section>
</body>

</html>