<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../styles/assets/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="../styles/estilização/Tables.css">
    <link rel="stylesheet" type="text/css" href="../styles/estilização/BodyAll.css">
    <link rel="stylesheet" href="../styles/estilização/NavBar.css">
    <title>Funcionarios</title>

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
        <i>Listagem de Funcionarios:</i>
    </h2>
    <div>
        <a href="../index.html" class="inicio">
            Inicio
        </a>
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    CPF
                </th>
                <th>
                    Data Nascimento
                </th>
                <th>
                    Modalidades
                </th>
                <th>
                    Salario
                </th>
                <th>
                    Recebimento
                </th>
            </tr>
            <?php
            require_once '../dao/DaoFuncionario.php';
            require_once '../dao/Conexao.php';

            $dc = new DaoFuncionario();
            $lista = $dc->listar();

            foreach ($lista as $linha) {
                echo '<tr>';
                echo '<td>' . $linha['ID'] . '</td>';
                echo '<td>' . $linha['NOME'] . '</td>';
                echo '<td>' . $linha['CPF'] . '</td>';
                echo '<td>' . $linha['DATA_NASC'] . '</td>';
                echo '<td>' . $linha['MODALIDADES'] . '</td>';
                echo '<td>' . $linha['SALARIO'] . '</td>';
                echo '<td>' . $linha['RECEBIMENTO'] . '</td>';
            }
            ?>
        </table>
</body>
</head>

</html>