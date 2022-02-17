<?php
session_start();
$_SESSION['todo'][$_GET['key']][1] = !$_SESSION['todo'][$_GET['key']][1];
 header('Location: ../index.php');