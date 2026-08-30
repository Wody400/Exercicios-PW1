<?php
    $produtos = [
        [
            "codigo" => "LAN-01",
            "nome" => "Sanduíche Natural",
            "categoria" => "Salgados",
            "preco" => 7.50
        ],
        [
            "codigo" => "BEB-02",
            "nome" => "Suco de Laranja 300ml",
            "categoria" => "Bebidas",
            "preco" => 4.00
        ],
        [
            "codigo" => "DOC-03",
            "nome" => "Salada de Frutas",
            "categoria" => "Sobremesas",
            "preco" => 5.00
        ],
        [
            "codigo" => "LAN-04",
            "nome" => "Pão de Queijo",
            "categoria" => "Salgados",
            "preco" => 3.50
        ]
    ];

    $totalProdutos = count($produtos);
    $totalpreco = 0;

    foreach ($produtos as $produto) {
        $totalpreco += $produto["preco"];
    }

    $totalmedia = $totalpreco / $totalProdutos;

    echo "<h1>Tabela de Preços</h1>";

    echo "<p>Total de produtos: $totalProdutos</p>";
    echo "<p>Preço médio: R$ " . number_format($totalmedia, 2, ",", ".") . "</p>";

    echo "<table border='1'>";

    echo "<thead>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nome</th>";
    echo "<th>Categoria</th>";
    echo "<th>Preço</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";

    foreach ($produtos as $produto) {

        echo "<tr>";

        echo "<td>" . htmlspecialchars($produto["codigo"]) . "</td>";
        echo "<td>" . htmlspecialchars($produto["nome"]) . "</td>";
        echo "<td>" . htmlspecialchars($produto["categoria"]) . "</td>";
        echo "<td>R$ " . number_format($produto["preco"], 2, ",", ".") . "</td>";

        echo "</tr>";
    }

    echo "</tbody>";

    echo "<tfoot>";
    echo "<tr>";
    echo "<td>Total</td>";
    echo "<td>$totalProdutos produtos</td>";
    echo "<td></td>";
    echo "<td>R$ " . number_format($totalpreco, 2, ",", ".") . "</td>";
    echo "</tr>";
    echo "</tfoot>";

    echo "</table>";

?>