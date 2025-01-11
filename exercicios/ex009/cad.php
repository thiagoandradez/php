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
            Conversor de Moedas v2.0
        </h1>
    </header>
    <main>
        <?php
        $valor = $_GET["valor"];
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        $inicio =date("m-d-Y", strtotime("-7 days")); 
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'01-10-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $dolar = $valor / $cotacao;
        echo "<p>Seus " . numfmt_format_currency($padrao,$valor,"BRL")." equivalem a " . numfmt_format_currency($padrao, $dolar , "USD") . "</p>";
        echo "<center>Cotação vinda </br>do <strong>Banco central</strong> via <strong>API.</strong></center>"
       
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>

</html>