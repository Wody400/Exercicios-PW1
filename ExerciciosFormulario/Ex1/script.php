<?php
    $nome = $_GET["nome"] ?? "desconhecido";
    $idade = $_GET["idade"] ?? "desconhecido";
    $sexo = $_GET["sexo"] ?? "desconhecido";
    $salario1 = $_GET["salario1"] ?? 0;
    $salario2 = $_GET["salario2"] ?? 0;
    $salario3 = $_GET["salario3"] ?? 0;
    $mediaSalario = ($salario1+$salario2+$salario3)/3;

    if($sexo == "m") {
        if($idade>=40){
            echo "<h1>Bem-vindo Sr. $nome.</h1>";
        } else {
            echo "<h1>Bem-vindo $nome.</h1>";
        };
    } else {
        if($idade>=40){
            echo "<h1>Bem-vinda Sra. $nome.</h1>";
        } else {
            echo "<h1>Bem-vinda $nome.</h1>";
        }
    }

    echo "Sua média salarial dos últimos 3 meses foram R$ $mediaSalario";
?>