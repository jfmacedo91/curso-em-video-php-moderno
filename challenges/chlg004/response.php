<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Conversor de moedas v2.0</title>
</head>
<body>
  <header>
    <h1>Conversor de moedas v2.0</h1>
  </header>
  <main>
    <div class="result">
      <?php
        date_default_timezone_set("America/Sao_Paulo");
        $initialDate = date("m-d-Y", strtotime("-7 days"));
        $finalDate = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$initialDate.'\'&@dataFinalCotacao=\''.$finalDate.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
        $response = json_decode(file_get_contents($url), true);
        $price = $response['value'][0]['cotacaoCompra'];
        $reais = $_REQUEST['number'] ?? 0;
        $dollars = $reais / $price;
        $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus ".numfmt_format_currency($pattern, $reais, "BRL")." equivalem a <strong>".numfmt_format_currency($pattern, $dollars, "USD")."</strong></p>";
        echo "<p>*Cotação obtida diretamente do site do <a href='https://www.bcb.gov.br'>Banco Central do Brasil</a>.</p>";
      ?>
      <button class="btn" onclick="javascript:history.go(-1)">
        <?= "\u{2B05}" ?> Voltar
      </button>
    </div>
  </main>
</body>
</html>