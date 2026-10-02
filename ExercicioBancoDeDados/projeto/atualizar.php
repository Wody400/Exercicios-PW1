<?php

require "config/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "
UPDATE alunos
SET
nome = ?,
email = ?
WHERE id = ?
";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $nome,
    $email,
    $id
]);

echo "OK";