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
            <pre>
                <h2>
                    <br><br>
                    <?php
                    require_once 'require.php';
                    $c1 = new Caneta;
                    $c1->modelo="bic cristal";
                    $c1->cor="azul";
                    // $c1->ponta=0.5;
                    // $c1->carga=95;
                    print_r($c1);
                    $c1->rabiscar();
                    $c1->tampar();
                    
                    ?>
                </h2>
            </pre>
        </article>
    </main>
    <footer>

    </footer>
</body>

</html>