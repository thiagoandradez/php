<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe caneta</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <header>

    </header>
    <main>
        <article>
            <h2>
                Exercício de class-caneta
                <br><br>
                <?php 
                require_once 'require.php';
                $c1 = new Caneta;
                $c1->modelo='BIC';
                $c1->cor='Azul';
                $c1->ponta='0.5';
                $c1->carga=50;
                $c1->tampada=false;
                $c1->destampar();
                $c1->rabiscar();
                
                // print_r($c1);
                ?>

            </h2>
        </article>
    </main>
    <footer>

    </footer>
</body>

</html>