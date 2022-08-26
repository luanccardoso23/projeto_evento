<?php
require_once("../classes/Evento.php");
require_once("Conexao.php");


class EventoDAO{
   private $tabela = "evento";

   // ESTAMOS PASSANDO COM PARAMETRO UMA VARIÁVEL DO TIPO EVENTO, OU SEJA, O MÉTODO IRÁ ESPERAR RECEBER UM VALOR QUE SEJA UM OBJETO DO TIPO EVENTO.
   public function inserir(Evento $evento){
       $sql = "INSERT INTO {$this->tabela} VALUES(NULL,:nome,:dataEvento,:foto)";
       $preparacao = Conexao::getConexao()->prepare($sql);

       $preparacao->bindValue(":nome",$evento->nomeEvento);
       $preparacao->bindValue(":dataEvento",$evento->dataEvento);
       $preparacao->bindValue(":foto",$evento->banner);

       $preparacao->execute();

       if($preparacao->rowCount() > 0){
           return true;

       }
       else{
        return false;
       }

   }
   public function consultar($dataBr = false){
       $sql =  "SELECT * FROM {$this->tabela}";
       $preparacao = Conexao::getConexao()->prepare($sql);

       $preparacao->execute();

       if($preparacao->rowCount() > 0){
           $resultado = $preparacao->fetchALL(PDO::FETCH_ASSOC);// O METODO fetchALL RETORNA TODOS OS REGISTROS DO BANCO DE DADOS E O VALOR PDO::FETCH_ASSOC, FAZ A ASSOCIAÇÃO DO NOME DOS CAMPOS DA TABELA COMOS INDICES DO VETOR.
            if($dataBr){

            
          
           foreach($resultado as $indice => $itens){
               $data = new DateTime($itens["data_evento"]);
               $resultado[$indice]["data_evento"] = $data->format("d/m/Y");


           }
        }
        return $resultado;
        

       }
       else{
           return false;

       }

   }
   public function atualizar(){

   }
   public function deletar(){

   }

}