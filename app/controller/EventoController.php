<?php
session_start();
require_once("../classes/Evento.php");

$meuEvento = new Evento();

$_SESSION["mensagem"] = $meuEvento->inicio($_POST, $_FILES['banner']);
header("Location:../view/CadastroView.php");// REDIRECIONANDO O USUÁRIO PARA A PÁGINA CadastroView.php
die();

/*
print_r($_POST);
echo"<hr>";
print_r($_FILES);
*/