<?php
session_start();



 require_once '../connect.php';

  $task_id = $_GET['id'];
  if($_GET['status'] == 1) {
    $status = 0;
  }  else {
    $status = 1;
  }
  $user_id = $_SESSION['user'];
  $todo = $_POST['todo'];
  $sql = $connect->prepare("UPDATE `tasks` SET `status` = '$status' WHERE `id` = '$task_id' ");
  $res= $sql->execute();
  if($res) {
    $sql = $connect->prepare("SELECT `todo`, `status`, `id` FROM `tasks` WHERE `user_id` = '$user_id'");
    $sql->execute();
    $tasks  = $sql ->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["todo"] = $tasks;

   }
       header("Location: ../index.php");