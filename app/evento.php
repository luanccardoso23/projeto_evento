<?php
date_default_timezone_set("America/Sao_Paulo");

$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"];

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";

//print_r($_POST);
var_dump($_POST);

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
validaData($dataEvento);

