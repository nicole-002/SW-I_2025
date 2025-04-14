<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PDF</title>

    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <table>
        
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php 

            for ($i=1; $i<=3; $i++){
                echo "<tr>
                        <td>Linha $i Coluna 1</td>
                        <td>Linha $i Coluna 2</td>
                        <td>Linha $i Coluna 3</td>               
                        
                    </tr>";
            }            
        ?>
    </table>
</body>
</html>