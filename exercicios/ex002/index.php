<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>
        Exemplo de PhP
    </h1>
    <p>
        <?php 
        date_default_timezone_set("America/Sao_paulo");
        echo"Hoje é dia " . date("d/m/y");
        
        echo" E a hora atual é " . date("G:i:s")
        ?>
    </p>
</body>

</html>