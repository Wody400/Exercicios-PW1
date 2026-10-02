<?php

require "config/conexao.php";

$id = $_GET["id"];

$sql = "
SELECT *
FROM alunos
WHERE id = ?
";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

echo json_encode(
    $stmt->fetch(PDO::FETCH_ASSOC)
);