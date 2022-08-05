<?php

require("heranca3.php");

$a1 = new Animal("Sapo Cururu", "Aquáticos e Terrestres", "Cordados");
$a1->relatorio();
echo "<br>";
$a1->resultado();
echo "<hr>";
$c1 = new Cachorro("Lulu", "Terrestres", "Cordados", "Vira-Lata");
$c1->canino();
echo "<hr>";
$p1 = new Peixe("Snow", "Aquáticos", "Chordata", "Homocerca" );
$p1->aquatico();
