<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Extra 2 (foreach) - PDF</title>
</head>
<body>
    <?php

        $produtos = [
            ['nome' => 'Prod A', 'preco' => 15.99],
            ['nome' => 'Prod B', 'preco' => 10],
            ['nome' => 'Prod C', 'preco' => 150.5],            
        ];

        echo "<table border = '1'>";
        echo "<tr>
                <th>Nome </th>
                <th>Preço</th>
            </tr>";
        
        foreach ($produtos as $produto) {
            echo"<tr>
                    <td>{$produto['nome']}</td>
                    <td>{$produto['preco']}</td>
                </tr>";
        }
        echo "</table>";

    ?>
</body>
</html>