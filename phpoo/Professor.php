<?php
    include "Funcionario.php";

    class Professor extends Funcionario{
        var $disciplina;

        function __contruct($n, $s, $d){
            //parent:: = seria tipo a função super do Java
            //Aqui estou reaproveitando o construtor da classe pai para criar o construtor da classe filho
            parent::__contruct($n, $s);
            $this->disciplina = $d;
        }

        function setDisciplina($d){
            $this->disciplina = $d;
        }

        static function metodoTeste(){
            echo "Método Teste"
        }

    }
?>