<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03 - PHP</title>
</head>
<body>
    <?php
        $nome = "Nicole"
    ?>

    <!-- Maneiras de mostrar um parágrafo em PHP -->
    <p>Oi, meu nome é: <?php echo "$nome"; ?></p>
    <p>Oi, meu nome é: <?php echo $nome; ?></p>
    <?php echo "<p> Oi, meu nome é: $nome </p>";?>
    <?php echo "<p> Oi, meu nome é: ".$nome." </p>";?>

    <!-- Maneira de mostrar em PHP (sem trsformar em parágrafo) -->
    <?php echo "Oi, meu nome é: $nome";?>

</body>
</html>