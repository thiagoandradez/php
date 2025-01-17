<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 04</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $v1= $_GET['v1'];
    $peso1 =$_GET['peso1'];
    $v2=$_GET['v2'];
    $peso2 =$_GET['peso2'];
    
    ?>
    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor:</label>
            <input type="number" name="v1" id="idv1" value="<?=$v1?>">
            <label for=" peso1">1° Peso:</label>
            <input type="number" name="peso1" id="idv2" value="<?=$peso1?>">
            <label for="v2">2° Valor:</label>
            <input type="number" name="v2" id="idv3" value="<?=$v2?>">
            <label for="peso2">2° Peso:</label>
            <input type="number" name="peso2" id="idv4" value="<?=$peso2?>">
            <input type="submit" value="Cálcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
        $media = ($v1 + $v2) / 2;
        $ponderada= ($v1 * $peso1 + $v2 * $peso2) / ($peso1 + $peso2);
        $padrao = number_format($ponderada,2, ",", ".");
        
        
        echo "A sua média aritmética é =<strong> $media</strong></br>";
        echo "A sua média ponderada com pesos<strong> $peso1</strong> e <strong>$peso2</strong> é =<strong> $padrao</strong> .</br>";
       
        
        ?>
    </section>
</body>

</html>