<?php
session_start();
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['REQUEST_URI'];S

// DELETE FROM `tasks` WHERE `tasks`.`id` = 1
// $arr_from_uri = explode('key=', $_SERVER['REQUEST_URI']);
// unset($_SESSION['todo'][$arr_from_uri[1]]);
// $_SESSION['todo'] =  array_values($_SESSION['todo']);
//  header('Location: ../index.php');
 require_once '../connect.php';
  $task_id = $_GET['id'];
  $user_id = $_SESSION['user'];
  $todo = $_POST['todo'];
  $sql = $connect->prepare("DELETE FROM `tasks` WHERE `id` = '$task_id'");
  $res= $sql->execute();
  if($res) {
    $sql = $connect->prepare("SELECT `todo`, `status`, `id` FROM `tasks` WHERE `user_id` = '$user_id'");
    $sql->execute();
    $tasks  = $sql ->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["todo"] = $tasks;
   }
       header("Location: ../index.php");