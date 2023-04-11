<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Strings</title>
</head>
<body>
  <?php
    echo "<h1>PHP \u{1F418}</h1>";
    echo '<h1>PHP \u{1F418}</h1>';

    const ESTADO = "PR";
    echo '<h2>Moro no '.ESTADO.'\u{1F5FA}</h1>';
    echo "<h2>Moro no ".ESTADO."\u{1F5FA}</h1>";
    echo "<h2>Moro no ESTADO \u{1F5FA}</h1>";

    $canal = 'Curso em Vídeo';
    $ano = date('Y');
    echo <<< TESTE
      <pre>Olá gaelra do canal $canal!
        Tudo bem com vocês?

        Como está sendo o ano de $ano?</pre>
    TESTE; //Não funciona em HTML, só com a tag <pre>
  ?>
</body>
</html>