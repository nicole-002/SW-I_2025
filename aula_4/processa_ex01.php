<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET['cxnome'];
        $num1 = $_GET['cxnum1'];
        $num2 = $_GET['cxnum2'];
        $num3 = $_GET['cxnum3'];

        $media = ($num1 + $num2 + $num3)/3;

        if ((is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) > 10)
        {
            echo "erro";
        }
        else{
            echo "A média das suas notas são: $media";
        }
               
    ?>
</body>
</html>