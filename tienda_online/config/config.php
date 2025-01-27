<?php

define("CLIENT_ID", "ATQJeD-Wr0_a5NZEuYfSZnaDoX0kbXhyY-Nl2_e4v1oK8kQW1ja3QQ9wlwf7MqkD1aoYySDhTAD_EEuz");
define("CURRENCY", "MXN");
define("KEY_TOKEN", "APR.wqc-354*");
define("MONEDA", "$");

session_start();

$num_cart = 0; 
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>