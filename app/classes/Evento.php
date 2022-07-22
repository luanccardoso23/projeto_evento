<?php

class Evento{
   public $nomeEvento;
  public  $dataEvento;

  // METODOS
  function validaData($data){

    $dataEvento = new DateTime($data);
    $dataAtual = new DateTime("now");

    echo $dataEvento->format("d/m/Y");
    echo "<br> A data de hoje é: ";
    print_r($dataAtual);


    if($dataEvento >= $dataAtual){
        echo "<p>Data do evento cadastrado com sucesso!</p>";

    }
    else{
        echo "<p>A data do evento não pode ser anterior a data atual!</p>";
    }




}

function recebeDados($campos){
    
    $this->nomeEvento = $campos["nomeEvento"];
    $this->dataEvento = $campos["dataEvento"];
    echo "O {$this->nomeEvento} vai acontecer na data {$this->dataEvento}";

}



}

// ESTAMOS INSTANCIANDO UM OBJETO
$meuEvento = new Evento();

print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeDados($_POST);