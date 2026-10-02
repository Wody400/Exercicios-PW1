<?php

require "config/conexao.php";

$id = $_POST["id"];

$sql = "
DELETE FROM alunos
WHERE id = ?
";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

echo "OK";