<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Brasil Card - Visualizar Funcionários</title>
</head>

<body>

    <!-- Inicio Navbar -->
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" width="190" height="44" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <div class="form-inline">
            <a class="btn btn-outline-primary my-2 my-sm-0" href="visualizar.php">VISUALIZAR</a>
            <a class="btn btn-outline-primary my-2 ml-1 my-sm-0" href="index.php">CADASTRAR</a>
        </div>

    </nav>
    <!-- Fim Navbar -->

    <!-- Inicio Tabela -->
    <div id="tabela">

        <div class="col-md-12 order-md-1">

            <div class="card mt-3">
                <div class="card-body bg-dark">
                    <h4 class="text-light">Funcionários</h4>
                </div>
            </div>

            <div class="card-body shadow p-3 mb-5 bg-white rounded"">

        <table class=" table table-striped">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Setor</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    require "conecta.php";

                    $select = $pdo->query("SELECT * FROM funcionarios");

                    $result = $select->fetchAll();

                    foreach ($result as $row) {

                        echo '<td>' . $row['idFuncionarios'] . '</td>
                        <td>' . $row['nome'] . '</td>
                        <td>' . $row['cpf'] . '</td>
                        <td>' . $row['cargo'] . '</td>
                        <td>' . $row['setor'] . '</td>
                        </tr>';
                    }

                    ?>

                </tbody>
                </table>

            </div>
        </div>
        <!-- Fim Tabela -->

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="assets/js/form-validation.js"></script>
        <!-- Mascara para os campos -->        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src="assets/js/myjs.js"></script>
        <!-- Scripts -->

</body>

</html>