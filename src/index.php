<?php
session_start();
  if(!$_SESSION['user']) {
    header('Location: login.php');
  }
  // $title = "Main Page";
  require_once "./views/blocks/header.php";
  require_once  './helpers/todo.php';
  require_once 'connect.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <?php
   require_once "./views/blocks/navbar.php";
  ?>
<h1>Main Content</h1>
<form action="../helpers/todo.php" method="POST">
  <input type="text" name="todo"  placeholder="Enter ut task" />
  <button type="submit">Enter</button>
</form>
<ul class="list">
<?php
  foreach($_SESSION['todo'] as $key => $val ) {

  echo "<li class='item'>";
  if($val['status'])  echo  "<a class='done text-decoration-none' href='../helpers/switcher.php?id=$val[id]&status=$val[status]'>$val[todo]</a>";
  else echo "<a class='process' href='../helpers/switcher.php?id=$val[id]&status=$val[status]'>$val[todo]</a>";
  echo "<a class='delete' href='../helpers/delete.php?id=$val[id]'>Delete</a>   </li>";
  };
?>
</ul>
</body>
</html>