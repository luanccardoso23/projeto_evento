<?php

/*
echo "<pre>";
 print_r($_FILES);
 echo "</pre>";
*/



 $nomeArquivo = $_FILES["banner"]["name"];
 $nomeTemporario = $_FILES["banner"]["tmp_name"];



 if(empty($nomeArquivo)){
    echo "<br> Arquivo Vazio";
 }
 else{
     echo "<br> Arquivo Aceito";
     $infoArquivo = pathinfo($nomeArquivo);
     echo "<br>";
     print_r($infoArquivo);
     if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
         echo "<br> formato de arquivo aceito";
         $pasta = "imagens/";
         $caminhoFinal = $pasta.$nomeArquivo;
         move_uploaded_file($nomeTemporario, $caminhoFinal);

     }
     else{
        echo "<br> formato de arquivo inválido";

     }

 }