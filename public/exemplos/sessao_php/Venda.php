<?php
session_start();

echo "{$_SESSION['nomeCliente']} comprou um {$_SESSION['nomeProduto']} que custou {$_SESSION['precoProduto']} reais. Ele levou {$_SESSION['quantProduto']} unidades, sendo que a preferência pelo preço de pagamento é o {$_SESSION['preferenciaCliente']['preco']}";