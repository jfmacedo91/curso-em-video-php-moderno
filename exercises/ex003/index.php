<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Tipos primitivos em PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos!</h1>
  <?php
    //0x = Hexadeciaml, 0b = Binário, 0 = Octal, e = Notação cientifica 3e2=300
    $num = 3e2;
    echo "<p>O valor da variável é $num</p>";

    $v = (int) 3e2; //Coerção
    var_dump($v);

    $casado = false;
    print "<p>O valor para casado é $casado</p>"; //No print e echo o false é vazio

    $vet = [5, 3, "Jean", 1, false];
    var_dump($vet);

    echo '<br><br>';

    class Pessoa {
      private string $nome;
    }

    $pessoa = new Pessoa;
    var_dump($pessoa);
  ?>
</body>
</html>