<?php

require "config/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "
INSERT INTO alunos
(nome,email)
VALUES
(?,?)
";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $nome,
    $email
]);

echo "OK";