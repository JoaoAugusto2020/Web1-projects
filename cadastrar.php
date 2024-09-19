<?php
    //Todas as variáveis do PHP utilizam o " $ " para serem identificadas e são fracamente tipadas
    //$_GET é um array criado automaticamente que possui todas variáveis passadas pelo method="GET"
    //$_POST é um array criado automaticamente que possui todas variáveis passadas pelo method="POST"

    //No php é possível que o índice do array seja um texto (mas podem )
    $nome = $_GET["nome"];
    $tutor = $_GET["tutor"];

    //echo é o print mais comum do PHP e ele aceita as seguintes formas:
    //echo "Nome: " . $nome . " Tutor: " . $tutor;
    echo "Nome: $nome <br/> Tutor: $tutor <br/>";
    
    //link do server, usuario, senha, base de dados
    $con = mysqli_connect("localhost", "root", "vertrigo", "veterinaria");
    $sql = "INSERT INTO animal (nome, tutor) VALUES (NULL, $nome, $tutor);";

    $resultado = mysqli_query($con, $sql);
?>