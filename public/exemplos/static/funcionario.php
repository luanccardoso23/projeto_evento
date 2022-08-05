<?php

class Funcionario{

    private static $nome;
    private static $salario;

    public function relatorio($nome, $salario){
        self::$nome = $nome;
        self::$salario = $salario;

        echo "Olá ".self::$nome" seu salário é ".self::$salario." reais";
    }
}