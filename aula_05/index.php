<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>

    <!-- link cdn para o framework bootstrap ( link para um conteúdo que está armazenado em uma rede de distribuição de conteúdo) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_index.css">
    
</head>
<body>
    <div class="container">
        <h5 style="text-align: center; margin-bottom: 2% " >PÁGINA INICIAL - MINI PROJETO AULA 05</h5>
        <div class= "espaco">

            <form action= "processa.php" method="POST">
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example1" class="form-control" name= "email" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example2" class="form-control" name= "senha"/>
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                        <label class="form-check-label" for="form2Example34"> Remember-me </label>
                    </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                 <div class="botaoentrar" style=" text-align: center">
                    <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">
                 </div>                             

                <!-- Register buttons -->

                <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>                                   
                </div>
            </form>
        </div>
    </div>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>