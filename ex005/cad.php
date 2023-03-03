<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
      $name = $_GET['name'] ?? null;
      $lastName = $_GET['lastName']?? null;
      echo "<p>É um prazer te conhecer <strong>$name $lastName</strong>! Este é meu site!";
    ?>
  </main>
</body>
</html>