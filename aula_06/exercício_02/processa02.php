
<style>
    table, tr, td, th{
            border: 1px solid black;
            padding: 5px;
    }
</style>
<?php

    $nlinhas = $_POST['cxnlinha'];
    $ncolunas = $_POST['cxncoluna'];

    echo "<table>";

    echo "<tr>";
    $col = 1;
    while ($col <= $ncolunas) {
        echo "<th>Coluna $col</th>";
        $col++;
    }
    echo "</tr>";

    $i = 1;
    while ($i <= $nlinhas) {
        echo "<tr>";
    
        $col = 1;
        while ($col <= $ncolunas) {
            echo "<td>Linha $i Coluna $col</td>";
            $col++;
        }
        echo "</tr>";
        $i++;
    }
    echo "</table>";

?>
