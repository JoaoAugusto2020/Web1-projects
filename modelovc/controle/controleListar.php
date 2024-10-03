<?php
    $conexao = mysqli_connect("localhost", "root", "vertrigo", "agenda");
    $dados = mysqli_query($conexao, "SELECT * FROM contato");
    //$dados: ResultSet - matriz

    while($usuario = mysqli_fetch_array($dados)){
        //$usuario: array com todos os dados de cada linha da tabela contato
        $contatos[] = $usuario["nome"];
    }
?>