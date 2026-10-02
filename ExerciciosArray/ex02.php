<?php
    $estudante = [
        "nome" => "Beatriz Ramos",
        "matricula" => "202410",
        "curso" => "Técnico em Informática",
        "turma" => "2AT",
        "media" => 8.7,
        "ativo" => true
        // O campo "telefone" e "observacao" não existem propositalmente
    ]   ;
    $nome = $estudante["nome"];
    $matricula = $estudante["matricula"];
    $curso = $estudante["curso"];
    $turma = $estudante["turma"];
    $media = number_format($estudante["media"]);
    $ativo = $estudante["ativo"];

    $telefone = $estudante["telefone"] ?? "Não informado";
    $observacao = $estudante["observacao"] ?? "Nenhuma pendência registrada";

    $matricula2 = "";

    if($estudante["ativo"]===true){
        $matricula2 = "matrícula ativa";
        $cor = "green";
    }
    else{
        $matricula2 = "matrícula trancada";
        $cor = "red";
    }

    echo "<h1>Estudante: $nome - Matrícula: $matricula</h1>";
    echo "<ol style='list-style-type: disc;'><li>Curso: $curso</li><li>Turma: $turma</li><li>Média Geral: $media</li><li>Matricula Ativa ou Trancada: $matricula2</li><li>Telefone: $telefone</li><li>Observação: $observacao</li></ol>"
?>