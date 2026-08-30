<?php
    $mapaAuditorio = [
        "A" => ["ocupado", "ocupado", "livre", "livre", "ocupado", "livre"],
        "B" => ["reservado", "ocupado", "ocupado", "livre", "reservado", "livre"],
        "C" => ["ocupado", "ocupado", "ocupado", "ocupado", "ocupado", "ocupado"],
        "D" => ["livre", "livre", "livre", "ocupado", "ocupado", "reservado"]
    ];

    $cor = "green";

    $total = 0;
    $livre = 0;
    $ocupado = 0;
    $reservado = 0;

    echo "<table border='1'>";
    foreach($mapaAuditorio as $letra => $fileira){
        echo "<tr>";
        foreach($fileira as $indice => $estado){
            if($estado==="ocupado"){
                $cor = "red";
                $ocupado++;
            }
            else if($estado==="reservado"){
                $cor = "grey";
                $reservado++;
            }
            else if($estado==="livre"){
                $cor = "green";
                $livre++;
            }
            echo "<td style='background-color: $cor;'>$letra-" . ($indice+1) . "</td>";
            $total++;
        }
        echo "</tr>";
    }
    echo "</table>";

    $porcentagem = round(($ocupado/$total)*100, 1);

    echo "<p>Total de Assentos:$total</p>";
    echo "<p>Livres:$livre</p>";
    echo "<p>ocupados:$ocupado</p>";
    echo "<p>Reservados:$reservado</p>";
    echo "<h3>Taxa de ocupacao</h3>";
    echo "<p>$porcentagem%</p>";


    foreach($mapaAuditorio as $letra2 => $fileira2){
        $primeirolivre = "";
        $livres = 0;
        foreach($fileira2 as $indice2 => $estado2){
            if($estado2==="livre"){
                $primeirolivre = "$letra2-". ($indice2+1)."";
                $livres++;
                break;
            }
        }
        if($livres===0){
            echo "<p style='color: red;'>Atencao: fileira $letra2 completamente cheia!<br></p>";
        }
        else if($livres>0){
            echo "<p  style='color: green;'>Primeiro assento livre da fileira $letra2: $primeirolivre<br></p>";
        }
    }
?>