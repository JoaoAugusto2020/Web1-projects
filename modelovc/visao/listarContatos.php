<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <?php
        include_once "../controle/controleListar.php";
    ?>

    <h1>Lista de Contatos</h1>

    <ul>
        <?php
            //for: para
            //each: cada
            //para cada item
            //item de $contatos
            //como indice $i
            //guarde o valor em $nome
            foreach($contatos as $i=>$nome){
                $i++;
                echo "<li>Contato nº $i: $nome</li>";
            }
        ?>
    </ul>
</body>
</html>