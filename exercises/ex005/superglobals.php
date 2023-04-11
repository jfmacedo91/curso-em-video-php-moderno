<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Superglobais</title>
</head>
<body>
  <main>
    <pre>
      <?php
        setcookie("week_day", "TUESDAY", time() + 3600);

        session_start();
        $_SESSION['user'] = "Jean Fernandes de Macedo";

        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET);

        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST);

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);

        echo "<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);

        echo "<h1>Superglobal SESSION</h1>";
        var_dump($_SESSION);

        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);
        echo '<pre>';
        foreach(getenv() as $key => $value) {
          echo "<br>[\"$key\"]=><br>".var_dump($value);
        }
        echo '</pre>';

        echo "<h1>Superglobal SERVER</h1>";
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';

        echo "<h1>Superglobal GLOBALS</h1>";
        echo '<pre>';
        var_dump($GLOBALS);
        echo '</pre>';
      ?>
    </pre>
  </main>
</body>
</html>