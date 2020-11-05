<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Brasil Card - Atualizar Funcionários</title>

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


    <!-- Select para preencher o form-->

    <?php


    require "conecta.php";

    $select = $pdo->query("SELECT * FROM funcionarios WHERE idFuncionarios = '" . $_GET['idFuncionario'] . "'");

    $result = $select->fetch(PDO::FETCH_ASSOC);
    

    ?>


    <!-- Incio Formulario Cadastro -->
    <div id="formularioCadastro">
        <div class="col-md-12 order-md-1">
            <div class="card mt-3">
                <div class="card-body bg-dark">
                    <h4 class="text-light">Atualizar Funcionários</h4>
                </div>
            </div>
            <div class="card-body shadow p-3 mb-5 bg-white rounded">

                <form class=" needs-validation" method="POST" action="atualizar.php?idFuncionario=<?php echo $result['idFuncionarios'];?>" novalidate>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $result['nome']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">CPF:</label>
                            <input type="text" class="form-control maskCpf" id="cpf" name="cpf" value="<?php echo $result['cpf']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">RG:</label>
                            <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $result['rg']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Número PIS/PASEP:</label>
                            <input type="text" class="form-control" id="pispasep" name="pispasep" value="<?php echo $result['pispasep']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Data Nascimento:</label>
                            <input type="text" class="form-control dataMask" id="dataNasc" name="dataNasc" placeholder="AAAA-MM-DD" value="<?php echo $result['dataNasc']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">CEP:</label>
                            <input type="text" class="form-control maskCep" id="cep" name="cep" value="<?php echo $result['cep']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $result['cidade']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="estado">Estado</label>
                            <select class="custom-select d-block w-100" id="estado" name="estado" required>
                                <option value="<?php echo $result['estado']; ?>"><?php echo $result['estado']; ?></option>
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amapá</option>
                                <option>Amazonas</option>
                                <option>Bahia</option>
                                <option>Ceará</option>
                                <option>Distrito Federal</option>
                                <option>Espírito Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins</option>
                            </select>
                            <div class="invalid-feedback">
                                Escolha um estado.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lastName">Rua:</label>
                            <input type="text" class="form-control" id="rua" name="rua" value="<?php echo $result['rua']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="lastName">Número:</label>
                            <input type="number" class="form-control" id="numero" name="numero" value="<?php echo $result['numero']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="lastName">Bairro:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $result['bairro']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="lastName">Complemento:</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $result['complemento']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $result['email']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Telefone 1:</label>
                            <input type="text" class="form-control maskTelefone" id="telefone1" name="telefone1" value="<?php echo $result['telefone1']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="firstName">Telefone 2:</label>
                            <input type="text" class="form-control maskTelefone" id="telefone2" name="telefone2" value="<?php echo $result['telefone2']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="escolaridade">Escolaridade</label>
                            <select class="custom-select d-block w-100" id="escolaridade" name="escolaridade" required>
                                <option value="<?php echo $result['escolaridade']; ?>"><?php echo $result['escolaridade']; ?></option>
                                <option>Ensino Fundamental Incompleto</option>
                                <option>Ensino Fundamental Completo</option>
                                <option>Ensino Médio Incompleto</option>
                                <option>Ensino Médio Completo</option>
                                <option>Ensino Superior Incompleto</option>
                                <option>Ensino Superior Completo</option>
                            </select>
                            <div class="invalid-feedback">
                                Escolha uma escolaridade.
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="lastName">Instituição de ensino:</label>
                            <input type="text" class="form-control" id="instEnsino" name="instEnsino" value="<?php echo $result['instEnsino']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Cargo:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $result['cargo']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Setor:</label>
                            <input type="text" class="form-control" id="setor" name="setor" value="<?php echo $result['setor']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Salário:</label>
                            <input type="number" class="form-control" id="salario" name="salario" value="<?php echo $result['salario']; ?>" required>
                            <div class="invalid-feedback">
                                Campo obrigatório.
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-9 mt-2"> *Todos os campos são obrigatórios.</div>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Atualizar</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- Fim  Formulario Cadastro-->


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