<?php
    $estudantes = [
        [
            "matricula" => "202401",
            "nome" => "Ana Souza",
            "turma" => "2AT",
            "email" => "ana@ifsul.edu.br",
            "ativo" => true
        ],
        [
            "matricula" => "202402",
            "nome" => "",
            "turma" => "2AM",
            "email" => "pedro@ifsul.edu.br",
            "ativo" => true
        ],
        [
            "matricula" => "202401",
            "nome" => "Carlos Lima",
            "turma" => "",
            "email" => "carlos@ifsul.edu.br",
            "ativo" => true
        ],
        [
            "matricula" => "202404",
            "nome" => "Beatriz Silva",
            "turma" => "2AT",
            "email" => "",
            "ativo" => true
        ],
        [
            "matricula" => "202405",
            "nome" => "Lucas Rocha",
            "turma" => "",
            "email" => "lucas@ifsul.edu.br",
            "ativo" => false
        ]
    ];

    $matriculas = array_column($estudantes, "matricula");
    $frequencia = array_count_values($matriculas);
    $pendencias = [];
    $corretos = 0;
    $total = count($estudantes);

    $erroN = 0;
    $erroE = 0;
    $erroT = 0;
    $erroM = 0;
    foreach($estudantes as $key1 => $estudante){
        $erros = [];

        if(trim($estudante["nome"]) === "" || $estudante["nome"] === null){
            $erros[] = "Nome nao entregue";
            $erroN++;
        }
        if(trim($estudante["email"]) === "" || $estudante["email"] === null){
            $erros[] = "Email nao entregue";
            $erroE++;
        }
        if($estudante["ativo"]===true && (trim($estudante["turma"])) === "" || $estudante["turma"] === null){
            $erros[] = "Precisa de uma Turma";
            $erroT++;
        }
        if($frequencia[$estudante["matricula"]] > 1){
            $erros[] = "Matricula duplicada";
            $erroM++;
        }

        if(!empty($erros)){
            $pendencias[] = [
                "estudante" => $estudante, 
                "erros" => $erros
            ];
        }
        else{
            $corretos++;
        }
    }

    echo "<h1>Matriculas</h1>";
    echo "<h2>Total de cadastros: $total</h2>";
    echo "<h2>Total de registros regulares: $corretos; Porcentagem:". ($corretos/$total)*100 ."%</h2>";
    echo "<h2>Total de registros com pendencia: ".$total - $corretos."; Porcentagem:". (($total - $corretos)/$total)*100 ."%</h2>";
    echo "<h1>Tipos de Erro</h1>";
    echo "<h3>Nomes nao entregues:$erroN<br>Emails nao entregues:$erroE<br>Sem turmas:$erroT<br>Matriculas duplicadas:$erroM<br></h3>";
?>

<table border="1">
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Turma</th>
        <th>E-mail</th>
        <th>Erros</th>
    </tr>

    <?php foreach ($pendencias as $pendencia): ?>

        <tr>
            <td><?= $pendencia["estudante"]["matricula"] ?></td>
            <td><?= $pendencia["estudante"]["nome"] ?></td>
            <td><?= $pendencia["estudante"]["turma"] ?></td>
            <td><?= $pendencia["estudante"]["email"] ?></td>
            <td><?= implode(", ", $pendencia["erros"]) ?>.</td>
        </tr>

    <?php endforeach; ?>
</table>
 