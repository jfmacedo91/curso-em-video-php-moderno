<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Anatomia de uma divisão</title>
</head>
<body>
  <?php
    $dividend = $_GET['dividend'] ?? 0;
    $divider = $_GET['divider'] ?? 1;
    $rest = $dividend % $divider;
    $intdiv = intdiv($dividend, $divider);
  ?>
  <main>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
      <label for="dividend">Dividendo</label>
      <input type="number" name="dividend" id="dividend" value="<?= $dividend; ?>">
      <label for="divider">Divisor</label>
      <input type="number" name="divider" id="divider" value="<?= $divider; ?>">
      <input type="submit" value="Analisar" class="btn">
    </form>
  </main>
  <section class="result">
    <h2>Estrutura da divisão</h2>
    <div class="division">
      <div class="dividend"><?= $dividend; ?></div>
      <div class="divider"><?= $divider; ?></div>
      <div class="rest"><?= $rest; ?></div>
      <div class="intdiv"><?= $intdiv; ?></div>
    </div>
  </section>
</body>
</html>