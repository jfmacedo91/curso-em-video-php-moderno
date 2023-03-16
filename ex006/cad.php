<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado final</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado final</h1>
  </header>
  <main>
    <div class="result">
      <?php
        $number = $_GET['number'] ?? 0;
        $predecessor = $number - 1;
        $successor = $number + 1;
        echo "<p>O número escolhido foi <strong>$number</strong>";
        echo "<p>O seu antecessor é $predecessor";
        echo "<p>O seu sucessor é $successor";
      ?>
      <a class="btn" href="index.html"><?= "\u{2B05}" ?> Voltar</a>
    </div>
  </main>
</body>
</html>