<?php

class Veiculo{
 private $marca;
 private $modelo;
 private $ligado = false;//para informar se o veiculo está ligado
 protected $nomeClasse;// somente as classes filhas poderão acessar esse atributo

 public function __construct($marca, $modelo){

    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->nomeClasse = get_class($this);

     
 }
 public function ligar(){
     $this->ligado = true;
     echo "O {$this->nomeClasse} cujo modelo é {$this->modelo} e marca {$this->marca} está ligado";
 }
 public function desligar(){
     $this->ligado = false;
     echo "O {$this->nomeClasse} cujo modelo é {$this->modelo} e a marca {$this->marca} está desligado";
 }

 public function estaLigado(){
     echo ($this->ligado) ? "Está Ligado" : "Está Desligado";
    
    /*
    if($this->ligado){
         echo "O veículo está ligado";


     }
     else{
        echo "O veículo está desligado";
     }
     */
 }

}

// A classe carro está herdando todas as informações da classe Veículo
class Carro extends Veiculo{
    public function ligarParaBrisa(){
        echo "{$this->nomeClasse} ligou o para-brisa <br>";
    }

}
