
<?php
    $chamada = [
        "Ana Souza",
        "Bruno Lima",
        "Carla Dias",
        "Daniel Rocha",
        "Eduarda Ramos"
    ];

    $estudantePresente = "Carla Dias";
    $estudantePrimeiro = "Ana Souza";
    $estudanteAusente = "Felipe Silva";

    $presente = in_array($estudantePresente, $chamada, true);
    $indicePresente = array_search($estudantePresente, $chamada, true);

    $primeiro = in_array($estudantePrimeiro, $chamada, true);
    $indicePrimeiro = array_search($estudantePrimeiro, $chamada, true);

    $ausente = in_array($estudanteAusente, $chamada, true);
    $indiceAusente = array_search($estudanteAusente, $chamada, true);

    echo "<h1>Verificador de Presença</h1>";

    echo "<h2>Lista de chamada</h2>";

    foreach ($chamada as $indice => $nome) {
        echo ($indice + 1) . " - $nome<br>";
    }

    echo "<p>Total de presentes: " . count($chamada) . "</p>";

    echo "<h2>Resultados</h2>";

    if ($presente && $indicePresente !== false) {
        echo "$estudantePresente: Presente - " . ($indicePresente + 1) . "ª posição<br>";
    }

    if ($primeiro && $indicePrimeiro !== false) {
        echo "$estudantePrimeiro: Presente - " . ($indicePrimeiro + 1) . "ª posição<br>";
    }

    if ($ausente === false) {
        echo "$estudanteAusente: Ausente - Não localizado na lista<br>";
    }
?>
