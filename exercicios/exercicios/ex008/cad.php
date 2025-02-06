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
            Analisador de Número Real
        </h1>
    </header>
    <main>
        <?php
        $numero = $_GET["numero"];
        $floatnum = (float)$numero;
        $real = (int)$numero;
        $fracao = $floatnum- floor($floatnum);
        
        echo "Analisando o número<strong> $numero</strong> informado pelo usuário:</br></br>";
        echo "A parte inteira do número é =  $real</br>";
        echo "A parte fracionária do número é = $fracao </br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>

</html>