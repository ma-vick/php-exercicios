<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>número aleatório</title>
</head>

<body>
    <main>
        <h1>número aleatório.</h1>
        <p>digite um número na tentativa de acertar o palpite.</p>
        <form action="" method="get">
            <input type="number" name="guess" id="guess">
            <input type="submit" value="enviar" name="submit">
        </form>
    </main>

    <?php
    // Escreva um código em PHP que gere um número aleatório entre 1 e 10 e peça para o usuário adivinhar qual é o número. Exiba uma mensagem informando se o usuário acertou ou errou.

    if (isset($_GET["submit"])) {
        $number = rand(1, 10);
        $guess = intval($_GET["guess"]);

        if ($guess == $number) {
            print "Você acertou.";
        } else {
            print "Não acertou. Tente novamente";
        }
    }

    ?>
</body>

</html>