<?php
session_start();

$nomeProduto = "Sapatênis";
$preco = 99.99;
$quantidade = 2;


echo "{$_SESSION['nomeCliente']} decidiu comprar o produto {$nomeProduto}  e custou R$ {$preco} e vai levar {$quantidade} unidades pagando com {$_SESSION['preferenciaCliente']['pagamento']}.";

// CRIANDO VARIÁVEIS DE SESSÃO

$_SESSION['nomeProduto'] = $nomeProduto;
$_SESSION['precoProduto'] = $preco;
$_SESSION['quantProduto'] = $quantidade;
