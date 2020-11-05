<?php

require "conecta.php";


try {
    
    $stmtdel = $pdo->prepare('DELETE FROM funcionarios WHERE `idFuncionarios` = :idFuncionarios');

    $stmtdel->execute(array(
        ':idFuncionarios' => $_GET['idFuncionario']
    ));

    require "visualizar.php";
    echo "<script> alert('Exclusão realizada com sucesso');</script>";
    

  }catch(PDOException $e) {
    echo 'Erro ao excluir: ' . $e->getMessage();
  }



?>