<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Contato</title>
</head>
<body>
    <?php
        if(isset($status)){
            echo "<h2>" . $status . "<h2/>";
        }
    ?>

    <a href="contato.php?fun=cadastrar">Cadastrar</a>
    <br><br>

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th><img src="visao/img/update.png" alt="update" width="30px"></th>
            <th><img src="visao/img/delete.png" alt="delete" width="30px"></th>
        </tr>

        <?php
        foreach($lista as $c){
            echo "<tr>";
                echo "<td>" .$c->getID(). "</td>";
                echo "<td><a href='contato.php?fun=exibir&id=" .$c->getID(). "'>" .$c->getNome(). "</a></td>";
                echo "<td>" .$c->getEmail(). "</td>";
                echo "<td>" .$c->getTelefone(). "</td>";
                echo "<td><a href='contato.php?fun=alterar&id=" .$c->getID(). "'><img src='visao/img/update.png' alt='update' width='30px'></td>";
                echo "<td><a href='contato.php?fun=excluir&id=" .$c->getID(). "'><img src='visao/img/delete.png' alt='delete' width='30px'></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>