<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilização/Tables.css">
    <link rel="stylesheet" href="/acd/styles/estilização/BodyAll.css">
    <link rel="stylesheet" href="../styles/estilização/NavBar.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/academia/styles/assets/favicon/site.webmanifest">
    <title>Clientes</title>
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
    <h2>
        <i> Listagem de Clientes:</i>
    </h2>
    <div class="btnInicio">
        <a href="../index.html" class="inicio">
            Início
        </a>
    </div>

    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nome
            </th>
            <th>
                Idade
            </th>
            <th>
                CPF
            </th>
            <th>
                Modalidades
            </th>
            <th>
                Mensalidades
            </th>
        </tr>
        <?php
        require_once '../dao/DaoCliente.php';
        require_once '../dao/Conexao.php';

        $dc = new DaoCliente();
        $lista = $dc->listar();

        foreach ($lista as $linha) {
            echo '<tr>';
            echo '<td>' . $linha['ID'] . '</td>';
            echo '<td>' . $linha['NOME'] . '</td>';
            echo '<td>' . $linha['IDADE'] . '</td>';
            echo '<td>' . $linha['CPF'] . '</td>';
            echo '<td>' . $linha['MODALIDADES'] . '</td>';
            echo '<td>' . $linha['MENSALIDADES'] . '</td>';
        }
        ?>
    </table>
</body>

</html>