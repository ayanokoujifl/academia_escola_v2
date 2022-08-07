<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon/site.webmanifest">
    <title>Clientes</title>
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


    <h2>
        <i> Listagem de Clientes:</i>
    </h2>
    <div class="btnInicio">
        <a href="../index.html" class="inicio-list">
            Início
        </a>
    </div>

    <table border="1">
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