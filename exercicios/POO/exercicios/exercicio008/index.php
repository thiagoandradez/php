<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>

<body>
    <main>
        <pre>
            <?php
            require_once 'pessoa.php';
            require_once 'livro.php';
                 $p[0]= new Pessoa('Thiago', 26, 'Masculino');
                 $p[1]= new Pessoa('Victoria',27,'Feminino');
                 $p[2]= new Pessoa('Caio',25,'Masculino');
                 $p[3]= new Pessoa('Fernanda',22,'Feminino');
                 $l[1]= new Livro('Pensa e enriqueça','Napoeleon Hill', 300 , $p[0]);
                 $l[2]= new Livro('Mais esperto que o diabo', 'Napoelon hill', 200, $p[1]);
                 $l[3]= new Livro('PHP Basico', 'José da silva', 100, $p[2]);
                 $l[1]->detalhes();
                ?>
        </pre>

    </main>
</body>

</html>