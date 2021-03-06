<?php

require_once __DIR__ . '/controller/multiplicacaoController.php';

$numero = isset($_POST['numero']) ? $_POST['numero'] : '0';
$quantidade = isset($_POST['qtdVezes']) ? $_POST['qtdVezes'] : '0';

$multiplicacao = new MultiplicacaoController();
$multiplicacao->multiplicar($numero, $quantidade);

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
</head>

<body>
    <header class="cabecalho">
        <h1>Desafio Tabuada<h1>
    </header>
    <section class="secao">
        <div>
            <form method="post" name="login">
                <label for="numero"> Numero: </label>
                <input type="number" id="numero" name="numero" value="0" />

                <label for="qtdVezes"> Quantidade de vezes: </label>
                <input type="number" id="qtdVezes" name="qtdVezes" value="0" />

                <input type="submit">
            </form>
        </div>
        <div class="tabuada">
            <table>
                <thead>
                    <tr>
                        <th>Tabuada</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <?=
                        $multiplicacao->tabuada();
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>