<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Conversor de moedas v2.0</title>
</head>
<body>
  <header>
    <h1>Conversor de moedas v2.0</h1>
  </header>
  <main>
    <div class="result">
      <?php
        $date = date("m-d-Y");
        $response = json_decode(file_get_contents('https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%27'.$date.'%27&$top=100&$format=json&$select=cotacaoCompra'));
        $price = $response->value[0]->cotacaoCompra;
        $reais = $_GET['number'] ?? 0;
        $dollars = $reais / $price;
        $formattedReal = number_format($reais, 2, ',', '.');
        $formattedDollars = number_format($dollars, 2, ',', '.');
        echo "<p>Seus R$ $formattedReal equivalem a <strong>US$ $formattedDollars</strong></p>";
        echo "<p>*Cotação obtida diretamente do site do <a href='https://www.bcb.gov.br'>Banco Central do Brasil</a>.</p>";
      ?>
      <a class="btn" href="index.html"><?= "\u{2B05}" ?> Voltar</a>
    </div>
  </main>
</body>
</html>