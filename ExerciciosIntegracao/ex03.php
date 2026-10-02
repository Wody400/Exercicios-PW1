<?php
    $roteiroOriginal = [
        "Terminal Rodoviário",
        "Hospital Regional",
        "Praça Central",
        "Bairro Industrial",
        "Praça Central",
        "Campus IFSul"
    ];

    $roteiroModificado = $roteiroOriginal;

    array_unshift($roteiroModificado, "Garagem da Empresa");

    $posicao1 = array_search("Hospital Regional", $roteiroModificado, true);
    array_splice($roteiroModificado, $posicao1 + 1, 0, "Biblioteca Municipal");

    $posicao2 = array_search("Bairro Industrial", $roteiroModificado, true);

    if($posicao2 !== false){
        array_splice($roteiroModificado, $posicao2, 1);
    }

    $roteiroModificado = array_unique($roteiroModificado);
    $roteiroModificado = array_values($roteiroModificado);

    $roteiros = [$roteiroOriginal, $roteiroModificado];
    
    foreach($roteiros as $indice1 => $roteiro){
        if($indice1===0){
            echo "<h1>Roteiro Original</h1>";
        }
        else if($indice1===1){
            echo "<h1>Roteiro Modificado</h1>";
        }
        echo "<table>";
        foreach($roteiro as $indice2 => $informacao){
            echo "<tr><td>$informacao</td></tr>";
        }
        echo "</table>";
    }

    echo "<br>-------------------------------------------------------<br><br>";

    for($i = 1; $i < count($roteiroModificado) -1; $i++){
        echo "<div>";
        echo "Anterior: " . $roteiroModificado[$i - 1] . "<br>";
        echo "Atual: " . $roteiroModificado[$i] . "<br>";
        echo "Próximo: " . $roteiroModificado[$i + 1];
        echo "</div>";

        echo "<br>";
    }

    echo "<h3>Quantidade total de trechos/viagens entre paradas: ". count($roteiroModificado)-1 . "</h3>";
?>