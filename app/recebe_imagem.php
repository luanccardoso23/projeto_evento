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
        //iremos verificar se a pasta existe ou não
        if(!file_exists($pasta)){
            mkdir($pasta,0777,true);// a função mkdir precisa de 3 parâmetros: 1. nome da pasta, 2. permissão para ler e escrever na pasta, 3. se irar criar subpastas ou não.

        }


         $caminhoFinal = $pasta.$nomeArquivo;
         move_uploaded_file($nomeTemporario, $caminhoFinal);
         echo "<img src='{$caminhoFinal}' width='200px' height='200px'>";

     }
     else{
        echo "<br> formato de arquivo inválido";

     }

 }