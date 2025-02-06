<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe caneta</title>
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
                    $c1 = new Caneta("bic","azul",0.5);
                    print_r($c1);
                    // $c1->setModelo("bic");
                    // $c1->setPonta(0.5);
                    // print("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}");
                    
                    ?>
                </h2>
            </pre>
        </article>
    </main>
    <footer>

    </footer>
</body>

</html>