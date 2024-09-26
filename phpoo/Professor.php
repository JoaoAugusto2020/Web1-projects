<?php
    include "Funcionario.php";

    class Professor extends Funcionario{
        var $disciplina;

        function __construct($n, $s, $d){
            //parent:: = seria tipo a função super do Java
            //Aqui estou reaproveitando o construtor da classe pai para criar o construtor da classe filho
            parent::__construct($n, $s);
            $this->disciplina = $d;
        }

        function setDisciplina($disciplina){
            $this->disciplina = $disciplina;
        }

        static function metodoTeste(){
            echo "Método Teste";
        }

    }
?>