<?php
session_start();

if($_SESSION["todo"] == "") {
  $_SESSION["todo"] = [];
};

if($_POST) {
  $todo_arr = [ $_POST['todo'], false];
  array_push($_SESSION["todo"],   $todo_arr );
  header("Location: ../index.php");
}

