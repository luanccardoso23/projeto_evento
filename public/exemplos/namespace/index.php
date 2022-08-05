<?php

require("classeLogin/login.php");
require("apiLogin/login.php");

use classeLogin\Login;
use apiLogin\Login as apiLogin;

$meuLogin = new \classeLogin\Login();//1ª forma de utilizar namespace
$meuLogin->verificaLogin();

$meuLogin2 = new Login();

$meuLogin3 = new apiLogin();