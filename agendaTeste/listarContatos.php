<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <?php
        //Deprecated (defasado), PHP 6
        // $conexao = mysql_connect("localhost", "root", "vertrigo");
        // mysql_select_db("agenda", $conexao);

        $conexao = mysqli_connect("localhost", "root", "vertrigo", "agenda");
        //localost: 127.0.0.1 -> IP Local
        //root: usuário de login
        //vertrigo: senha do usuário (XAMPP é sem senha)
        //agenda: base de dados

        $dados = mysqli_query($conexao, "SELECT * FROM contato");
        //$dados: ResultSet - matriz

        $i = 1;
        while($usuario = mysqli_fetch_array($dados)){
            //percorre linha a linha e coloca num array, nesse caso: $usuario
            echo "<LI> Contato nº $i: ". $usuario['nome'] ."</LI>";
            $i++;
        }
    ?>
</body>
</html>