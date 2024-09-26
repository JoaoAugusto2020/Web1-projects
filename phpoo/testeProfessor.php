<?php
    //include: copia e cola o código que foi incluido
    //include_once: inclui uma única vez, verificando as classes pai
    //require: inclui só quando necessário
    //require_once: inclui só quando necessário uma única vez 
    
    include "Professor.php";

    $prof = new Professor("Regina", 2500, "Engenharia");

    echo "Teste 1 <br/>";
    echo "O prof $prof->nome ministra a disciplina de $prof->disciplina e recebe R$ $prof->salario <br/><br/>";

    $prof->setDisciplina("Engenharia II");
    $prof->aumentaSalario(111);

    echo "Teste 2 <br/>";
    echo "O prof $prof->nome ministra a disciplina de $prof->disciplina e recebe R$ $prof->salario <br/><br/>";

    //Como o método é static, chamamos através da Classe
    echo Professor::metodoTeste();
?>