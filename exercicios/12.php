<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data de nascimento</title>
</head>

<body>
    <h1>data de nascimento.</h1>
    <form action="" method="post">
        <label for="birthday">Insira sua data de nascimento:</label>
        <input type="date" name="birthday" id="birthday">
        <input type="submit" name="submit" value="enviar">
    </form>

    <?php
    // Crie uma função em PHP que receba uma data no formato "dd/mm/aaaa" e retorne a mesma data no formato "aaaa-mm-dd". 

    if (isset($_POST["submit"])) {
        $date = $_POST["birthday"];

        echo $date;
    }

    ?>
</body>

</html>