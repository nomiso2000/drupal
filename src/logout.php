<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['task']);
header('Location: index.php');