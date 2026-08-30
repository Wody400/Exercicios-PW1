<?php
    $materiais = [
        "Multímetro Digital",
        "Ferro de Solda",
        "Protoboard",
        "Alicate de Corte"
    ];

    $materiais[] = "Fonte de Bancada";
    $quantity = count($materiais);
    $first = $materiais[0];
    $last = $materiais[4];
    
    echo "<h1>Materiais da Bancada</h1><br>";

    
    echo "<h3>Total de itens: $quantity</h3>";
    echo "<h3>Primeiro material: " . htmlspecialchars($first) . "</h3>";
    echo "<h3>Último material: " . htmlspecialchars($last) . "</h3>";

    
    echo "<h2>Lista de materiais:</h2>";
    echo "<ol>";
    foreach($materiais as $num => $material){
        echo "<li><p>Indice: $num <br> Material: $material</p></li>";
    }
    echo "</ol>";
?>