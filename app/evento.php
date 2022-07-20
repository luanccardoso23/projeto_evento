<?php

$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"];

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";

//print_r($_POST);
var_dump($_POST);

function validaData($data){

    $dataEvento = new DateTime($data);

    echo $dataEvento->format("d/m/Y");

}
validaData($dataEvento);

