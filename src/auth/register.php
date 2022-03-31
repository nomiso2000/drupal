<?php
session_start();

if(!empty($_POST['password']) && !empty($_POST['email'])) {
  require_once '../connect.php';
  $email  =  $_POST['email'];
  $password = $_POST['password'];
  $sql = $connect->prepare("SELECT * FROM `users` WHERE `login` = '$email' AND `password` = '$password'");
  $sql->execute();
  $res  = $sql ->fetchAll(PDO::FETCH_ASSOC);
  if(sizeof($res) === 0) {
  $sql = $connect->prepare("INSERT INTO `users`(`email`, `password`) VALUES (?,?)");
  $sql->execute([$email, $password]);
  header("Location: /login.php");
  }
} else {
  header("Location: /register.php");
}
?>