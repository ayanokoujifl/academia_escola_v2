<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../styles/assets/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="../styles/estilização/BodyAll.css">
    <link rel="stylesheet" href="../styles/estilização/NavBar.css">
    <link rel="stylesheet" href="../styles/estilização/Form.css">
</head>

<body>
    <header>
        <nav>
            <h1>Academia Boa Forma</h1>
            <a href="http://github.com/ayanokoujifl" target="_blank" class="git">
                <img src="../styles/assets/git.svg" alt='GitHubIcon'>
                <p class="">Luís Gustavo</p>
                </div>
            </a>
            </div>
        </nav>
    </header>
    <div class="align-form">
        <h2>
            <i style="margin: 0px;"> Cadastro de funcionários</i>
        </h2>
        <form action="cadastroFuncionario.php" method="POST" class="form">
            <label class="lbl" for="input_nome"> Nome: </label>
            <input type="text" name="input_nome" id="input_nome">
            <label class="lbl" for="input_cpf"> CPF: </label>
            <input type="text" name="input_cpf" id="input_cpf">
            <label class="lbl" for="input_idade"> Data de nascimento: </label>
            <input type="date" placeholder="Data de nascimento" name="input_idade" id="input_idade">
            <label class="lbl" for="input_salario"> Salario: </label>
            <input type="text" name="input_salario" id="input_salario">
            <label class="lbl" for="input_modalidades"> Modalidades: </label>
            <input type="text" name="input_modalidades" id="input_modalidades">
            <label class="lbl" for="input_recebimento"> Recebimento: </label>
            <input type="text" name="input_recebimento" id="input_recebimento">
            <div>
                <button class="save-button">Salvar</button>
        </form>
        <a class="inicio" href="../index.html">Inicio </a>
    </div>
    </div>

</body>

</html>