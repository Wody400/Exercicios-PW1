<?php
    $equipes = [
        "Equipe Verde" => [
            "etapas" => [95, 110, 80],
            "penalidade" => 15
        ],
        "Equipe Azul" => [
            "etapas" => [100, 105, 95],
            "penalidade" => 0
        ],
        "Equipe Amarela" => [
            "etapas" => [75, 80, 85],
            "penalidade" => 0
        ],
        "Equipe Vermelha" => [
            "etapas" => [100, 95, 90],
            "penalidade" => 15
        ]
    ];  

    $equipespontos = [];

    $totalbrutoverde = array_sum($equipes['Equipe Verde']['etapas']);
    $penalidadeverde = $equipes['Equipe Verde']['penalidade'];
    $totalliquidoverde = $totalbrutoverde-$penalidadeverde;
    $equipespontos["Equipe Verde"] = $totalliquidoverde;

    $totalbrutoazul = array_sum($equipes['Equipe Azul']['etapas']);
    $penalidadeazul = $equipes['Equipe Azul']['penalidade'];
    $totalliquidoazul = $totalbrutoazul-$penalidadeazul;
    $equipespontos["Equipe Azul"] = $totalliquidoazul;

    $totalbrutoamarela = array_sum($equipes['Equipe Amarela']['etapas']);
    $penalidadeamarela = $equipes['Equipe Amarela']['penalidade'];
    $totalliquidoamarela = $totalbrutoamarela-$penalidadeamarela;
    $equipespontos["Equipe Amarela"] = $totalliquidoamarela;

    $totalbrutovermelha = array_sum($equipes['Equipe Vermelha']['etapas']);
    $penalidadevermelha = $equipes['Equipe Vermelha']['penalidade'];
    $totalliquidovermelha = $totalbrutovermelha-$penalidadevermelha;
    $equipespontos["Equipe Vermelha"] = $totalliquidovermelha;

    arsort($equipespontos);
    
    $posicao = 1;
    $anterior = null;
    $extra = 0;
    
    echo "<table border='1' style='width: 80%; margin: 30px auto;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Ranking</th>";
    echo "<th>Nome</th>";
    echo "<th>Pontos</th>";
    echo "<th>Penalidade</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach($equipespontos as $nome => $pontos){
        $penalidade = $equipes[$nome]["penalidade"];
        $bruto = array_sum($equipes[$nome]['etapas']);
        $extra++;
        if($anterior===null){
            $anterior = $pontos;
            $maior = $pontos;
        }
        else if($anterior===$pontos){
            $anterior = $pontos;
        }
        else{
            $anterior = $pontos;
            $posicao = $extra;
        }
        $diferenca = $maior-$pontos;
        if($pontos>=250 && $pontos!=$maior){
            echo "<tr>";
            echo "<td>$posicao Lugar(diferenca:-$diferenca)</td>";
            echo "<td>$nome - Premiado!!</td>";
            echo "<td>$pontos($bruto bruto)</td>";
            echo "<td>$penalidade</td>";
            echo "</tr>";
        }
        else if($pontos===$maior){
            echo "<tr>";
            echo "<td>$posicao Lugar(diferenca:$diferenca)</td>";
            echo "<td>$nome - Premiado!!</td>";
            echo "<td>$pontos($bruto bruto)</td>";
            echo "<td>$penalidade</td>";
            echo "</tr>";
        }
        else{
            echo "<tr>";
            echo "<td>$posicao Lugar(diferenca:-$diferenca)</td>";
            echo "<td>$nome - Desclassificado</td>";
            echo "<td>$pontos($bruto bruto)</td>";
            echo "<td>$penalidade</td>";
            echo "</tr>";
        }
    }
    echo "</tbody>";
    echo "</table>";

    echo "<br><br>";

    echo "<h2>Premiada: mais que 250 pontos</h2>";
?>