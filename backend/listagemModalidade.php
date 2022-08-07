<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon/site.webmanifest">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Funcionarios</title>

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
    <h2>
        <i>Listagem de Funcionarios:</i>
    </h2>
    <div>
        <a href="../index.html" class="inicio-list">
            Inicio
        </a>
        <table border="1">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Valor
                </th>
            </tr>
            <?php
            require_once '../dao/DaoModalidade.php';
            require_once '../dao/Conexao.php';

            $dc = new DaoModalidade();
            $lista = $dc->listar();

            foreach ($lista as $linha) {
                echo '<tr>';
                echo '<td>' . $linha['ID'] . '</td>';
                echo '<td>' . $linha['NOME'] . '</td>';
                echo '<td>' . $linha['VALOR'] . '</td>';
            }
            ?>
        </table>
</body>
</head>

</html>