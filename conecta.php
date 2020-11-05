<?php

try {
    $pdo = new PDO("mysql:dbname=id15319615_funcionarios;host=localhost","root","");
} 
//Erros relacionados ao PDO
catch (PDOException $e) {
    echo "Erro BD:".$e->getMessage();
}
//Outros erros
catch (Exception $e) {
    echo "Erro :".$e->getMessage();
}



?>


