<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Aula 01 de PHP ##</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula de PHP</h1>
    <hr>
    <?php 
        echo "<p>Olá Mundo</p>";
        echo "<hr>";

        $nome = "Pedro";
        $sobrenome = "Holuboski";
        echo "<p>" . $nome . " " . $sobrenome . "<p>";
        
        date_default_timezone_set('America/Sao_Paulo');

        $hoje = date('d/m/Y');
        $hora = date('H:i');

        echo "<p>$hoje - $hora</p>";
        echo '<p>$hoje - $hora</p>';
    ?>
</body>
</html>