<?php
    $cadastro[0] = ["email" => "joao.silva@gmail.com", "senha" => "asdf1234", "nome" => "João Silva", "foto" => "https://foo.bar/foto/joao", "cidade" => "Charqueadas", "fone" => "51987653465"];

    $cadastro[1] = ["email" => "maria.souza@gmail.com", "senha" => "maria123", "nome" => "Maria Souza", "foto" => "https://foo.bar/foto/maria", "cidade" => "Porto Alegre", "fone" => "51987654321"];

    $cadastro[2] = ["email" => "carlos.oliveira@gmail.com", "senha" => "carlos456", "nome" => "Carlos Oliveira", "foto" => "https://foo.bar/foto/carlos", "cidade" => "São Jerônimo", "fone" => "51981234567"];

    $cadastro[3] = ["email" => "ana.costa@gmail.com", "senha" => "ana789", "nome" => "Ana Costa", "foto" => "https://foo.bar/foto/ana", "cidade" => "Canoas", "fone" => "51989876543"];

    $cadastro[4] = ["email" => "pedro.santos@gmail.com", "senha" => "pedro321", "nome" => "Pedro Santos", "foto" => "https://foo.bar/foto/pedro", "cidade" => "Guaíba", "fone" => "51987651234"];

    $email = $_POST["email"] ?? "desconhecido";
    $senha = $_POST["senha"] ?? "desconhecido";

    foreach($cadastro as $informacao){
        if($informacao['email'] == $email && $informacao['senha'] == $senha){
            header("Location: profile.php");
            exit;
        } 
    }

    header("Location: login.html");
    exit;
?>