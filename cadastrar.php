<?php

require "conecta.php";

try {

    $stmt = $pdo->prepare("INSERT INTO `funcionarios`( `nome`, `cpf`, `rg`, `pispasep`, `dataNasc`, `cep`, `cidade`, `estado`, `rua`, `numero`, `bairro`, `complemento`, `email`, `telefone1`, `telefone2`, `escolaridade`, `instEnsino`, `cargo`, `setor`, `salario`) VALUES ( :nome, :cpf, :rg, :pispasep, :dataNasc, :cep, :cidade, :estado, :rua, :numero, :bairro, :complemento, :email, :telefone1, :telefone2, :escolaridade, :instEnsino, :cargo, :setor, :salario)");
    $stmt->execute(array(
        ':nome' => $_POST["nome"],
        ':cpf' => $_POST["cpf"], 
        ':rg' => $_POST["rg"],
        ':pispasep' => $_POST["pispasep"],
        ':dataNasc' => $_POST["dataNasc"],
        ':cep' => $_POST["cep"],
        ':cidade' => $_POST["cidade"],
        ':estado' => $_POST["estado"],
        ':rua' => $_POST["rua"],
        ':numero' => $_POST["numero"],
        ':bairro' => $_POST["bairro"],
        ':complemento' => $_POST["complemento"],
        ':email' => $_POST["email"],
        ':telefone1' => $_POST["telefone1"],
        ':telefone2' => $_POST["telefone2"],
        ':escolaridade' => $_POST["escolaridade"],
        ':instEnsino' => $_POST["instEnsino"],
        ':cargo' => $_POST["cargo"],
        ':setor' => $_POST["setor"],
        ':salario' => $_POST["salario"]
    ));
    
    echo "<script> alert('Cadastro realizado com sucesso');</script>";
    
    require "index.php";

}catch (Exception $e) {
    echo "Erro ao inserir:".$e->getMessage();
}

?>