<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>

<body>
    <?php 
require_once 'require.php';
$p1 = new ContaBanco(); //Marcos
$p2 = new ContaBanco(); // Juliana
$p1->abrirConta("CC");
$p1->setnumconta(1111);
$p1->setDono("Marcos");
$p2->abrirConta("CP");
$p2->setnumconta(2222);
$p2->setDono("Juliana");
$p1->depositar(300);
$p2->depositar(500);
$p2->sacar(100);
$p1->pagarMensal();
$p2->pagarMensal();




print_r($p1);
print_r($p2);


?>
</body>

</html>