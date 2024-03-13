<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["Sobrenome"] ?? "sem sobrenome";
    $local = $_GET["Local"] ?? "sem local";
    $pais = $_GET["País"] ?? "sem país";
    $ponto = $_GET["ponto"] ?? "sem ponto";
   
    ?>
</body>
</html>