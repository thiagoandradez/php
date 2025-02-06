<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>

<body>
    <main>

        <h1>Exercicio 07</h1>
        <?php
        require_once 'require.php';
            $l=array();
            $l[0] = new Lutador("preety boy","França",30,1.75,68.9,11,2,1);
            $l[1] = new Lutador("Putscript", "Brasil",29 , 1.68, 57.8 ,14 ,2 ,3 );
            $l[2] = new lutador ("SnapShadow", "EUA", 35, 1.65 ,80.9 , 12 , 2 , 1);
            $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93 ,81.6 ,13, 0 , 2);
            $l[4] = new Lutador("UFOCOBOL", "Brasil", 37, 1.70, 119.3 , 5, 4 , 3);
            $l[5] = new Lutador("Nerdart", "EUA", 30, 1.81 ,105.7, 12,2,4 );
            $l[3]->apresentar();
            $l[3]->status();
            
            ?>

    </main>
</body>

</html>