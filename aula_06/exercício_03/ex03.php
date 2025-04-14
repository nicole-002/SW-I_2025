<style>
    table, tr, td, th{
            border: 1px solid black;
            padding: 5px;
    }
</style>
<?php

    $produtos = [
        [
            'nome' => 'Tinta vermelha acrilex 30ml',
            'preco' => 4.99,
            'categoria' => 'Tintas'
        ],
        [
            'nome' => 'Bloco papel Canson 120gr',
            'preco' => 21.50,
            'categoria' => 'Papeis e Cartolinas'
        ],
        [
            'nome' => 'Estojo 100 pens Tilibra azul',
            'preco' => 79.90,
            'categoria' => 'Estojos'
        ],
        [
            'nome' => 'Kit 10 canetas Staedtler',
            'preco' => 59.98,
            'categoria' => 'Canetas'
        ],
    ];

    echo "<table>";
    echo "<tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>";
    
    foreach ($produtos as $produto){

        if ($produto['categoria'] == 'Tintas'){
            $cor = 'rgba(255, 139, 139, 0.7)';
        } elseif ($produto['categoria'] == 'Papeis e Cartolinas'){
            $cor ='rgba(199, 250, 140, 0.7)';
        } elseif ($produto['categoria'] == 'Estojos'){
            $cor ='rgba(147, 242, 255, 0.67)';
        } elseif ($produto['categoria'] == 'Canetas'){
            $cor ='rgba(211, 138, 245, 0.66)';
        } else {
            $cor = 'rgba(255, 161, 239, 0.71)';
        }

        echo "<tr style= 'background-color: $cor';>
                <td>{$produto['nome']}</td>
                <td>R$ {$produto['preco']}</td>
                <td>{$produto['categoria']}</td>
            </tr>";

    }
    echo "</table>";
        
?>