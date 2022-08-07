<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Equipamentos</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/favicon/site.webmanifest">

</head>

<body>
  <header>
    <h1>Academia Boa Forma</h1>
    <a href="http://github.com/ayanokoujifl" target="_blank" class="git-icon">
      <img src="../assets/git.svg" alt='GitHubIcon'>
      <p>Luís Gustavo</p>
      </div>
    </a>
    </div>
  </header>
  <div class="align-form">
    <h2>
      <i style="margin: 0px;"> Cadastro de equipamentos</i>
    </h2>

    <form action="cadastroEquipamento.php" method="POST" class="form">
      <label for="input_nome" class="lbl"> Nome: </label>
      <input type="text" name="input_nome" id="input_nome">
      <label class="lbl" for="input_modalidade"> Modalidade: </label>
      <input type="text" name="input_modalidade" id="input_modalidade">
      <label class="lbl" id="lblTR" for="input_temporevisao"> Tempo para revisão: </label>
      <input type="text" name="input_temporevisao" id="input_temporevisao">

      <button class="save-button">
        Salvar
      </button>
    </form>
    <a class="inicio" href="../index.html">Inicio </a>
  </div>
</body>

</html>