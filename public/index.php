<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "services.php";


$cliente = $container['cliente'];

$listaCliente = $cliente->listar();
print_r($listaCliente);
?>


