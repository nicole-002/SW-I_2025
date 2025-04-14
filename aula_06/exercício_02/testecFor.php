
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

    echo "<tr>"; // colunas
    for ($col = 1; $col <= $ncolunas; $col++){
        echo "<th> Coluna $col </th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $nlinhas; $i++){ //linhas

        echo "<tr>";                
        for ($col = 1; $col<= $ncolunas; $col++){
            echo"<td> linha $i col $col </td>";                
        }
        echo "</tr>";

    }
    echo "</table>";
?>