<?php
    $alimentos = [
        [
            "id" => 1,
            "nome" => "Maçã Gala",
            "grupo" => "Frutas",
            "estoque" => 45,
            "sem_lactose" => true,
            "preco" => 1.80
        ],
        [
            "id" => 2,
            "nome" => "Banana Prata",
            "grupo" => "Frutas",
            "estoque" => 0,
            "sem_lactose" => true,
            "preco" => 1.20
        ],
        [
            "id" => 3,
            "nome" => "Iogurte Natural",
            "grupo" => "Laticínios",
            "estoque" => 30,
            "sem_lactose" => false,
            "preco" => 2.50
        ],
        [
            "id" => 4,
            "nome" => "Queijo Minas Frescal",
            "grupo" => "Laticínios",
            "estoque" => 15,
            "sem_lactose" => false,
            "preco" => 3.20
        ],
        [
            "id" => 5,
            "nome" => "Biscoito Integral de Aveia",
            "grupo" => "Cereais",
            "estoque" => 50,
            "sem_lactose" => true,
            "preco" => 2.00
        ],
        [
            "id" => 6,
            "nome" => "Barra de Cereal",
            "grupo" => "Cereais",
            "estoque" => 0,
            "sem_lactose" => true,
            "preco" => 1.90
        ],
        [
            "id" => 7,
            "nome" => "Sanduíche Natural de Frango",
            "grupo" => "Proteínas",
            "estoque" => 20,
            "sem_lactose" => true,
            "preco" => 4.50
        ]
    ];

    $categorias = [];

    foreach($alimentos as $key1 => $alimento1){

        if($alimento1["estoque"] <= 0){
            unset($alimentos[$key1]);
        }
    }

    $alimentos = array_values($alimentos);

    $itensSemLactose = [];

    foreach($alimentos as $alimento2){

        $grupo = $alimento2["grupo"];

        $categorias[$grupo][] = $alimento2;

        if($alimento2["sem_lactose"] === true){
            $itensSemLactose[] = $alimento2;
        }
    }

    $kit = [];
    $totalKit = 0;

    foreach($categorias as $grupo => $itens){

        $maisBarato = $itens[0];

        foreach($itens as $item){

            if($item["preco"] < $maisBarato["preco"]){
                $maisBarato = $item;
            }
        }

        $kit[] = $maisBarato;
        $totalKit += $maisBarato["preco"];
    }
?>

<h2>Alimentos por categoria</h2>

<?php foreach($categorias as $grupo => $itens): ?>

    <h3><?= $grupo ?></h3>

    <?php foreach($itens as $item): ?>

        <div>
            <strong><?= $item["nome"] ?></strong><br>
            Grupo: <?= $item["grupo"] ?><br>
            Estoque: <?= $item["estoque"] ?><br>
            Preço: R$ <?= number_format($item["preco"], 2, ",", ".") ?>
        </div>

        <br>

    <?php endforeach; ?>

<?php endforeach; ?>


<h2>Alimentos sem lactose</h2>

<?php foreach($itensSemLactose as $item): ?>

    <div>
        <strong><?= $item["nome"] ?></strong><br>
        Grupo: <?= $item["grupo"] ?><br>
        Preço: R$ <?= number_format($item["preco"], 2, ",", ".") ?>
    </div>

    <br>

<?php endforeach; ?>


<h2>Kit diário</h2>

<?php foreach($kit as $item): ?>

    <?= $item["grupo"] ?>:
    <?= $item["nome"] ?> -
    R$ <?= number_format($item["preco"], 2, ",", ".") ?>

    <br>

<?php endforeach; ?>

<strong>
    Total: R$ <?= number_format($totalKit, 2, ",", ".") ?>
</strong>


<h2>JSON</h2>

<pre>
<?= json_encode(
    array_values($itensSemLactose),
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
) ?>
</pre>