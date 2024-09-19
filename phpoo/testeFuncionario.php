<?php
    include "Funcionario.php";

    //Instanciando um objeto da classe Funcionario
    $f = new Funcionario("João Augusto", 1000);

    echo "O funcionario $f->nome recebe R$ $f->salario <br/>";

    $f->aumentaSalario(1000);
?>