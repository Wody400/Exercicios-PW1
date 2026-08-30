<?php
    $mapaAuditorio = [
        "A" => ["ocupado", "ocupado", "livre", "livre", "ocupado", "livre"],
        "B" => ["reservado", "ocupado", "ocupado", "livre", "reservado", "livre"],
        "C" => ["ocupado", "ocupado", "ocupado", "ocupado", "ocupado", "ocupado"],
        "D" => ["livre", "livre", "livre", "ocupado", "ocupado", "reservado"]
    ];

    $total = 0;
    $livre = 0;
    $ocupado = 0;
    $reservado = 0;
    echo "<table border='1' style='width: 80%; margin: 30px auto; border-spacing: 8px;'>";
    foreach($mapaAuditorio as $i => $fileira){
        echo "<tr>";
        foreach($fileira as $y => $mesas){
            if($mesas === "ocupado"){
                $cor = "red";
                $ocupado++;
            }else if($mesas === "livre"){
                $cor = "green";
                $livre++;
            }else{
                $cor = "yellow";
                $reservado++;
            }
            echo "<td style='background-color: $cor;padding: 20px; text-align: center;'>$i-" . ($y + 1) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<div style='width: 80%; margin: 20px auto; padding: 15px; background: #f5f5f5; border-radius: 10px; text-align: center; font-size: 18px;'>
            🟢 <strong>$livre</strong> Livres
            <span style='margin: 0 18px;'>|</span>
            🔴 <strong>$ocupado</strong> Ocupadas
            <span style='margin: 0 18px;'>|</span>
            🟡 <strong>$reservado</strong> Reservadas
        </div>";
?>