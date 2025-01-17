<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- .number_format($int,0, ",", ".") -->
    <main>
        <?php   
        $num = $_GET['num'];
        ?>
        <h1>Informe um número:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="idnum">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <?php 
        $raiz2 = sqrt($num);
        $raiz3 = pow($num, 1/3);
        $padrao1 = number_format($raiz2,3, "," , ".");
        $padrao2 = number_format($raiz3,3, "," , ".");
        // $inteiro = (int)$raiz2;
        // $inteiro2 = (int)$raiz3;
        
        echo "Analisando o <strong>número $num</strong>, temos: ";
        
        echo "<ul>
            <li>
                    A sua raiz quadrada é <strong>$padrao1</strong>. </br>      
            </li>
            <li>
                    A sua raiz cúbica é <strong>$padrao2</strong>.
            </li>
        </ul>";

        ?>
    </section>
</body>

</html>