<?php

require "config/conexao.php";

$sql = "
SELECT *
FROM alunos
ORDER BY nome
";

$stmt = $pdo->query($sql);

echo json_encode(
    $stmt->fetchAll(PDO::FETCH_ASSOC)
);