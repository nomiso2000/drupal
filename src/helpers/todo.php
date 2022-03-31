<?php
session_start();

if($_SESSION["todo"] == "") {
  $_SESSION["todo"] = [];
};

if($_POST) {
  require_once '../connect.php';
  $user_id = $_SESSION['user'];
  $todo = $_POST['todo'];
  $sql = $connect->prepare("INSERT INTO `tasks`(`user_id`, `todo`) VALUES (?,?)");
  $res = $sql->execute([$user_id, $todo]);
  if($res) {
    $sql = $connect->prepare("SELECT `todo`, `status`, `id` FROM `tasks` WHERE `user_id` = '$user_id'");
    $sql->execute();
    $tasks  = $sql ->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["todo"] = $tasks;
      // $todo_arr = [ 'todo' => $todo, 'status' =>  0];
      // array_push($_SESSION["todo"],   $todo_arr );
      header("Location: ../index.php");
  }
}

