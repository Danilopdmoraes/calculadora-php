<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
    <?php
    $soma = $_POST["primeiroValor"] + $_POST["segundoValor"];
    echo "<h1>O resultado foi: " . $soma . "!";
    ?>

</body>
</html>