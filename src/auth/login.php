<?php
session_start();
if(!empty($_POST['password']) && !empty($_POST['email'])) {
  require_once '../connect.php';
  $email  =  $_POST['email'];
  $password = $_POST['password'];
  $sql_user = $connect->prepare("SELECT * FROM `users` WHERE `email` = '$email'");
  $sql_user->execute();
  $res  = $sql_user ->fetchAll(PDO::FETCH_ASSOC);
  if(sizeof($res) !== 0) {
    $user_id = $res[0]['id'];
    $_SESSION["user"] = $user_id;
    $sql = $connect->prepare("SELECT * FROM `tasks` WHERE `user_id` = '$user_id'");
    $sql->execute();
    $tasks  = $sql ->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["todo"] = $tasks;
// if($_POST) {
//   $todo_arr = [ $_POST['todo'], false];
//   array_push($_SESSION["todo"],   $todo_arr );
//   header("Location: ../index.php");
// }

  header("Location: /index.php");
  }
} else {
    header("Location: /login.php");
}
?>