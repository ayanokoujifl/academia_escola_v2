<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/favicon/site.webmanifest">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Cadastro de Modalidades</title>
</head>

<body>
  <header>
    <h1>Academia Boa Forma</h1>
    <a href="http://github.com/ayanokoujifl" target="_blank" class="git-icon">
      <img src="../assets/git.svg" alt='GitHubIcon'>
      <p class="">Luís Gustavo</p>
      </div>
    </a>
    </div>
  </header>

  <div class="align-form">
    <h2>
      <i style="margin: 0px;"> Cadastro de modalidades</i>
    </h2>
    <form action="cadastroModalidade.php" method="POST" class="form">
      <label class="lbl" for="input_nome"> Nome: </label>
      <input type="text" name="input_nome" id="input_nome">

      <label class="lbl" for="input_valor"> Valor: </label>
      <input type="text" name="input_valor" id="input_valor">
      <button class="save-button">
        Salvar
      </button>
    </form>
    <a class="inicio-form" href="../index.html">Inicio </a>
  </div>

</body>

</html>