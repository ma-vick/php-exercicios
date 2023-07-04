<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário com PHP</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Insira seu nome:</label>
        <input type="text" name="name" id="name">
        <label for="email">Insira seu email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" name="submit" value="enviar">
    </form>

    <?php
    // Crie um formulário em PHP com os campos "Nome" e "Email" e faça com que, ao ser submetido, os valores sejam exibidos na tela. 

    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];

        print " </br> O email de {$name} é {$email}";
    }

    ?>
</body>

</html>