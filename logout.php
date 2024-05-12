<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
logout();
$newURL = "/dashboard";
header('Location: '.$newURL);
?>

