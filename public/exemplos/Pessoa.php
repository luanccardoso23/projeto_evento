<?php

class Pessoa{
  public $nome;
  public $idade;
  public $peso;
  public $cpf;
  public $telefone;
  
  // O MÉTODO CONSTRUTOR IRÁ INICIALIZAR OS ATRIBUTOS COM VALORES DINÂMICOS
  function __construct($nome, $idade, $peso, $cpf, $telefone){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->peso = $peso;
    $this->cpf = $cpf;
    $this->telefone = $telefone;
  }  
  
 

  function falar($texto){
      echo $texto;

     
    
  }
  function olhar($texto2){
      echo $texto2;
  }

}

$pessoa1 = new Pessoa("Bruno", 18, 70, 789654987.69, 984745412);
$pessoa1->falar("Fazendo aquele curso maroto");
echo "<br>";
$pessoa1->olhar("Adicionando novas informações");
echo "<br>";


echo "Meu nome é {$pessoa1->nome} minha idade é {$pessoa1->idade}";
echo "<br>";

echo "Meu cpf é {$pessoa1->cpf}, e meu telefone é {$pessoa1->telefone} <hr>";

$pessoa2 = new Pessoa("Janna", 25, 78, 458854687.15, 995544778);

echo "Olá me chamo {$pessoa2->nome}, minha idade é {$pessoa2->idade}, meu cpf é {$pessoa2->cpf} e meu telefone é {$pessoa2->telefone}";