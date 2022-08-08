<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/favicon/site.webmanifest">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Cadastro de clientes</title>

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

  <div>
    <h2>
      <i style="margin: 0px;"> Cadastro de clientes</i>
    </h2>
    <form action="cadastroCliente.php" method="POST" class="">
      <label for="input_nome" class=""> Nome: </label>
      <input type="text" name="input_nome" id="input_nome">

      <label for="input_cpf" class=""> CPF: </label>
      <input type="text" name="input_cpf" id="input_cpf">

      <label for="input_idade" class=""> Idade: </label>
      <input type="text" name="input_idade" id="input_idade">

      <label for="input_modalidades" class=""> Modalidades: </label>
      <select name="input_modalidades" id="input_modalidades" style="margin:5px;">

        <?php
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoModalidade.php';

        $dao = new DaoModalidade();
        $lista = $dao->listar();
        foreach ($lista as $linha) {
          echo '<option value="' . $linha['ID'] . '">' . $linha['NOME'] . '</option>';
        }
        ?>
      </select>

      <label for="input_mensalidade" class="lbl"> Mensalidades: </label>
      <input type="text" name="input_mensalidade" id="input_mensalidade">
      <button class="save-button">Salvar</button>
    </form>
    <a href="../index.html" class="inicio-form">Inicio </a>
  </div>
</body>

</html>