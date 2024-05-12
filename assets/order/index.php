<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


include_once $_SERVER['DOCUMENT_ROOT'].'/assets/order/func/start-orders.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/order/func/complete-orders.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/order/func/abandoned-cart.php';

?>