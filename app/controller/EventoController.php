<?php
session_start();
require_once("../classes/Evento.php");
require_once("../model/EventoDAO.php");

$meuEvento = new Evento();
$meuEventoDAO = new EventoDAO();


if(isset($_POST["cadastrar"])){
   
    $_SESSION["mensagem"] = $meuEvento->inicio($_POST, $_FILES['banner']);
    if($_SESSION["mensagem"]["status"]){
    $meuEventoDAO->inserir($meuEvento);
    }
    //header("Location:../view/CadastroView.php");// REDIRECIONANDO O USUÁRIO PARA A PÁGINA CadastroView.php
    //die();

}

if(isset($_POST["atualizar"])){
    $_SESSION["atualizar"] = $meuEvento->inicio($_POST, $_FILES["banner"]);
    if($_SESSION["atualizar"]["status"]){
        $meuEventoDAO->atualizar($meuEvento, $_POST["atualizar"]); // ESTAMOS PASSANDO COMO PARAMETRO UM OBJETO EVENTO E O ID DO EVENTO QUE ESTÁ ATRIBUIDO AO $_POST['ATUALIZAR']

    }
    header("Location:../view/AtualizarEventoView.php");
    die();
   

}

/*
echo"<pre>";
print_r($meuEventoDAO->consultar());
echo"</pre>";
*/

/*
print_r($_POST);
echo"<hr>";
print_r($_FILES);
*/