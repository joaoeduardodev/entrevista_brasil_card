<?php

require "conecta.php";

try {

    $stmtup = $pdo->prepare("UPDATE `funcionarios` SET `nome`= :nome,`cpf`=:cpf,`rg`=:rg,`pispasep`=:pispasep,`dataNasc`=:dataNasc,`cep`=:cep,`cidade`=:cidade,`estado`=:estado,`rua`=:rua,`numero`=:numero,`bairro`=:bairro,`complemento`=:complemento,`email`=:email,`telefone1`=:telefone1,`telefone2`=:telefone2,`escolaridade`=:escolaridade,`instEnsino`=:instEnsino,`cargo`=:cargo,`setor`=:setor,`salario`=:salario WHERE `idFuncionarios` = :idFuncionarios ");
    $stmtup->execute(array(
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
        ':salario' => $_POST["salario"],
        ':idFuncionarios' => $_GET['idFuncionario']
    ));

    require "visualizar.php";
    
    echo "<script> alert('Atualização realizada com sucesso');</script>";
    

}catch (Exception $e) {
    echo "Erro ao atualizar:".$e->getMessage();
}

?>


