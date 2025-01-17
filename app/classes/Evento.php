<?php

class Evento{
   private $nomeEvento;
   private $dataEvento;
   private $banner;
   private $mensagem = [];// armazenar as mensagens de erro e sucesso

  // METODOS: comportamentos
   /**
    * @param $campos: este parâmetro espera receber uma constante $_POST
    * @param $arquivo: este parâmetro espera receber um valor como por exemplo $_FILES['banner']
    */
  public function inicio($campos, $arquivo){
        // Verificar se os campos estão em branco
        if($this->recebeDados($campos)){
           if($this->validaData($campos["dataEvento"])){
               if($this->recebeArquivo($arquivo)){
                   $this->mensagem = [
                       "status"=> true,
                       "msg" => "Evento cadastrado com sucesso"
                   ];

               }
               else{
                $this->mensagem = [
                    "status" => false,
                    "msg" => "Você precisa enviar uma imagem com formato jpg pu png."

                ];
               }

           }
           else{
                $this->mensagem = [
                    "status" => false,
                    "msg" => " Data do evento é anterior ao dia atual"
                ];
           }

        }
        else{
            $this->mensagem = [
                "status" => false,
                "msg" => "Os campos não podem ficar em branco"
            ];
           

        }
        return $this->mensagem;

    }

 public function validaData($data){

    $dataEvento = new DateTime($data);
    $dataAtual = new DateTime("now");

    //echo $dataEvento->format("d/m/Y");
    //echo "<br> A data de hoje é: ";
    //print_r($dataAtual);


    if($dataEvento >= $dataAtual){
        //echo "<p>Data do evento cadastrado com sucesso!</p>";
        return true;

    }
    else{
        //echo "<p>A data do evento não pode ser anterior a data atual!</p>";
        return false;
    }




}

public function recebeDados($campos){
    
    $this->nomeEvento = $campos["nomeEvento"];
    $this->dataEvento = $campos["dataEvento"];
    if(empty($this->nomeEvento) || empty($this->dataEvento)){
        return false;

    }
    else{
        return true;
    }
    
    
    
    //echo "O {$this->nomeEvento} vai acontecer na data {$this->dataEvento}";

}
// essa função irá receber o comando no padrão $_FILES['nome_arquivo']
public function recebeArquivo($banner){
    
 //$nomeArquivo = $_FILES["banner"]["name"];
 //$nomeTemporario = $_FILES["banner"]["tmp_name"];
 $this->banner = $banner;// estou atribuindo $_FILES['banner'] para $this->banner
 



 if(empty($this->banner["name"])){
    //echo "<br> Arquivo Vazio";
    return false;
 }
 else{
     //echo "<br> Arquivo Aceito";
     $infoArquivo = pathinfo($this->banner["name"]);
    /*
     echo "<br>";
     echo "<pre>";
     print_r($infoArquivo);
     echo "</pre>";
     */
     
     if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
         //echo "<br> formato de arquivo aceito";
        
         
         $pasta = "../imagens/";
        //iremos verificar se a pasta existe ou não
        if(!file_exists($pasta)){
            mkdir($pasta,0777,true);// a função mkdir precisa de 3 parâmetros: 1. nome da pasta, 2. permissão para ler e escrever na pasta, 3. se irar criar subpastas ou não.

        }

        // RENOMEANDO O ARQUIVO
        $novoNome = new DateTime();
        //echo "<hr>".$novoNome->getTimestamp();
        $nomeFinal = $novoNome->getTimestamp().".".$infoArquivo["extension"];
        //echo "<hr>".$nomeFinal;


         $caminhoFinal = $pasta.$nomeFinal;
         move_uploaded_file($this->banner["tmp_name"], $caminhoFinal);
         //echo "<img src='{$caminhoFinal}' width='200px' height='200px'>";
         
         $this->banner = $caminhoFinal;
         return true;

     }
     else{
        //echo "<br> formato de arquivo inválido";
        return false;

     }

 }

}

public function __get($atributo){
    return $this->$atributo;

}



}

// ESTAMOS INSTANCIANDO UM OBJETO
/*
$meuEvento = new Evento();

print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeArquivo($_FILES["banner"]);
*/
