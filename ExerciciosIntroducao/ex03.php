<?php
    $dados = [
        $pessoa1 = [
            "Nome" => "João Silva",
            "Idade" => "25",
            "Email" => "joao.silva@gmail.com",
            "E.Civil" => "Solteiro",
            "Salário" => "1950"
        ],
        $pessoa2 = [
            "Nome" => "Rafael Cardoso",
            "Idade" => "32",
            "Email" => "rafacardoso@gmail.com",
            "E.Civil" => "Casado",
            "Salário" => "5541"
        ],
        $pessoa3 = [
            "Nome" => "Gabriela Schidt",
            "Idade" => "21",
            "Email" => "gabischidt@gmail.com",
            "E.Civil" => "Solteira",
            "Salário" => "3214"
        ],
        $pessoa4 = [
            "Nome" => "Roberta Oliveira",
            "Idade" => "38",
            "Email" => "roberta.oliveira@gmail.com",
            "E.Civil" => "Divorciada",
            "Salário" => "4258"
        ],
        $pessoa5 = [
            "Nome" => "Pedro Santos",
            "Idade" => "17",
            "Email" => "pebolado@gmail.com",
            "E.Civil" => "Solteiro",
            "Salário" => "2100"
        ]
    ];
    echo "<table border='1' style='text-align: center;'>";
    foreach ($dados as $pessoa){
        echo "<tr>";
        
        foreach($pessoa as $value){
            echo "<td>" . $value . "</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
?>