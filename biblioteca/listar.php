<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        require 'conexao.php';
        include_once 'pedaco.php';
    ?>

    <h2 style = "text-align: center">Lista de Livros Disponíveis</h2>

    <div class='container'>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Genêro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Páginas</th>
                </tr>   
            </thead>
            <tbody>
                <?php                
                    $sql = "SELECT * FROM livros";
                    $stmt = $pdo->query($sql);
                    while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        echo"<tr>";
                        echo "<th scope='row'>".$livro."</th>";
                        echo "<td>".$livro['titulo']."</td>";
                        echo "<td>".$livro['genero']."</td>";
                        echo "<td>".$livro['ano']."</td>";
                        echo "<td>".$livro['autor']."</td>";
                        echo "<td>".$livro['paginas']."</td>";

                        echo "ID: " . $livro['id_livro'] . "<br>";
                        echo "Titulo: " . $livro['titulo'] . "<br>";
                        echo "Gênero: " . $livro['genero'] . "<br>";
                        echo "Ano:" . $livro['ano'] . "<br>";
                        echo "Autor: " . $livro['autor'] . "<br>";
                        echo "Páginas: " . $livro['paginas'] . "<br><hr>";

                        echo"<tr>";
                    }
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>O Pequeno Príncipe</td>
                    <td>Literatura Infantil</td>
                    <td>Antoine de Saint-Exupéry</td>
                    <td>1943</td>
                    <td>96</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dom Casmuro</td>    
                    <td>Romance</td>
                    <td>Machado de Assis</td>
                    <td>1900</td>
                    <td>338</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>@social</td>
                    <td>@social</td>
                    <td>@social</td>
                </tr>
            </tbody>


        </table>

        <a href="index.php" type="button" class="btn btn-primary">Voltar</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>