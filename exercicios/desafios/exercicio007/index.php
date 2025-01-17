<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP 07</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $num = $_GET['num'];
    ?>
    <main>
        <h2>Calculadora de tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Qual é o total de segundos?</label>
            <input type="number" name="num" id="idnum" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        $sobra = $num;
        $semanas = (int)($sobra/604800);
        $sobra = $sobra % 604800;
        $dias = (int)($sobra/86400);
        $sobra = $sobra % 86400;
        $horas = (int)($sobra/3600);
        $sobra = $sobra % 3600;
        $minutos = (int)($sobra/60);
        $sobra = $sobra % 60;
        $segundos = $sobra;
        $padrao = number_format($segundos,0, ",", ".");
       
        echo "Analisando o valor que você digitou, <strong>$num segundos</strong> <br/>equivalem a um total de :";
        
        echo "  
                <ul>
                    <li>$semanas semanas</li>
                    <li>$dias dias</li>
                    <li>$horas horas</li>
                    <li>$minutos minutos</li>
                    <li>$padrao segundos</li>
                </ul>
                
             ";
        ?>
    </section>
</body>

</html>