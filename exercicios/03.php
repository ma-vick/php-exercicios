<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soma</title>
</head>
<body>
    <form method="post">
        <label for="num1">insira um número:</label>
        <input type="number" name="num1" id="num1">   
        <label for="num2">insira outro número:</label>
        <input type="number" name="num2" id="num2"> 
        <input type="submit" name="submit" value="somar"></input>
    </form>

    <?php
        // Crie uma função em PHP que receba dois números como parâmetros e retorne a soma deles.

        if(isset($_POST['submit'])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $soma = $num1 + $num2;

            print $soma;
        }
    ?>
</body>
</html>