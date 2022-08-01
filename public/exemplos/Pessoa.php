<?php

class Pessoa{
  private $nome;
  private $idade;
  private $peso;
  private $cpf;
  private $telefone;
  
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
  function __get($atributo){
    return $this->$atributo;
    
  }
  function __set($atributo, $valor){
    if($atributo == "nome"){
      $this->$atributo = strtoupper($valor);

    }
    else{
      $this->$atributo = $valor;
    }

  }
 /*
  function getNome(){
    return strtoupper($this->nome);

  }
  function setNome($valor){
    $this->nome = $valor;
  }
  */


}

$pessoa1 = new Pessoa("Bruno", 18, 70, 789654987.69, 984745412);
//$pessoa1->setNome("Juliana");
$pessoa1->nome = "Jose";
$pessoa1->idade = 24;
echo "{$pessoa1->nome} tem {$pessoa1->idade} anos, pesa {$pessoa1->peso}, seu cpf é {$pessoa1->cpf} e o seu número é {$pessoa1->telefone}";





/* 
$pessoa1->falar("Fazendo aquele curso maroto");
echo "<br>";
$pessoa1->olhar("Adicionando novas informações");
echo "<br>";

$pessoa1->nome = "Marta";


echo "Meu nome é {$pessoa1->nome} minha idade é {$pessoa1->idade}";
echo "<br>";

echo "Meu cpf é {$pessoa1->cpf}, e meu telefone é {$pessoa1->telefone} <hr>";

$pessoa2 = new Pessoa("Janna", 25, 78, 458854687.15, 995544778);

echo "Olá me chamo {$pessoa2->nome}, minha idade é {$pessoa2->idade}, meu cpf é {$pessoa2->cpf} e meu telefone é {$pessoa2->telefone}";
/*