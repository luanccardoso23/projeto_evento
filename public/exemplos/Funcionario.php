<?php

class Funcionario{

    public $nome;
    public $codigo;
    public $salario;

    function __construct($nome, $codigo, $salario){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salario = $salario;
        

    }
     function relatorio(){
        echo "Olá, o funcionário se chama {$funcionario1->nome}, seu código é {$funcionario1->codigo}, e o salário é {$funcionario1->salario}";

     }

    $funcionario1->relatorio("")
    echo "<br>";

    $funcionario1 = new Funcionario("Jefferson", 0145, 4500.00);
    echo "Olá, o funcionário se chama {$funcionario1->nome}, seu código é {$funcionario1->codigo}, e o salário é {$funcionario1->salario}";





    
}