<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>

    <style>
        table, tr, td, th{
            border: 1px solid black;
            padding: 5px;
        }
    </style>

</head>
<body>
    <h2>Exercício 1: Tabela Estilizada com Cores Alternadas (FOR)</h2>
    <ul>
        <li>Crie uma tabela de 8 linhas e 4 colunas.</il>
        <li>Estilize para que as linhas ímpares e pares tenham cores de fundo diferentes.</li>
    </ul>

    <table>
        <tr>
            <th>Coluna-1</th>
            <th>Coluna-2</th>
            <th>Coluna-3</th>
            <th>Coluna-4</th>
        </tr>

        <?php
            for ($i=1 ; $i<9; $i++){

                if ($i % 2 == 0) { //defindo a cor das linhas pares                    
                    echo "<tr style='background-color:rgb(193, 139, 255);'>";
                } 
                else { //definindo a cor das linhas impares                  
                    echo "<tr style='background-color:rgba(222, 176, 252, 0.62);'>";
                }

                echo"
                        <td> linha $i col 1 </td>
                        <td> linha $i col 2 </td>
                        <td> linha $i col 3 </td>
                        <td> linha $i col 4 </td>
                    </tr>";            
            }

        ?>
    </table>

</body>
</html>