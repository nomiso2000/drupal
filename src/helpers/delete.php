<?php
session_start();
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['REQUEST_URI'];S
$arr_from_uri = explode('key=', $_SERVER['REQUEST_URI']);
unset($_SESSION['todo'][$arr_from_uri[1]]);
$_SESSION['todo'] =  array_values($_SESSION['todo']);
 header('Location: ../index.php');