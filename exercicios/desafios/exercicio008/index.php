<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP 08</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
$valor = $_GET['valor'];
?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual o valor você deseja sacar?</label>
            <input type="number" name="valor" id="idvalor" value="<?=$valor?>">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque realizado</h2>
        <?php
        $saque = $valor;
        $resto = $saque;
        $nota200 = floor($resto / 200);
        $resto %= 200;
        $nota100 = floor($resto / 100);
        $resto %= 100;
        $nota50 = floor($resto / 50);
        $resto %= 50;
        $nota20 = floor($resto / 20);
        $resto %= 20;
        $nota10 = floor($resto / 10);
        $resto %= 10;
        $nota5 = floor($resto / 5);
        $resto %= 5;
        $nota2 = floor($resto / 2);
        $resto %= 2;
        $nota1 = floor($resto / 1);
        $resto %= 1;
    
        echo "O caixa eletrônico vai te entregar as seguintes notas:</br>
        <ul>
            <li>$nota200 notas de 200</li> 
            <li>$nota100 notas de 100</li>    
            <li>$nota50 notas de 50</li>
            <li>$nota20 notas de 20</li>
            <li>$nota10 notas de 10</li>
            <li>$nota5 notas de 5</li>
            <li>$nota2 notas de 2</li>
            <li>$nota1 notas de 1</li>
        </ul>
        ";
        
       
        
        ?>

    </section>
</body>

</html>