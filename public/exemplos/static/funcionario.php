<?php

class Funcionario{

    private static $nome;
    private static $salario;

    public static function relatorio($nome, $salario){
        self::$nome = $nome;
        self::$salario = $salario;

        echo "Olá ".self::$nome." seu salário é ".self::$salario." reais";
    }
    public static function getSalario(){
       return self::$salario; 
    }
    public static function setSalario($valor){
     self::$salario = $valor;
    }
}