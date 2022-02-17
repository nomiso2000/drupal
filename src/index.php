<?php
session_start();
  $title = "Main Page";
  require_once "./blocks/header.php";
  require_once  './helpers/todo.php';
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
  if($val[1])  echo  "<a class='done' href='../helpers/switcher.php?key=$key'>$val[0]</a>";
  else echo "<a class='process' href='../helpers/switcher.php?key=$key'>$val[0]</a>";
  echo "<a class='delete' href='../helpers/delete.php?key=$key''>Delete</a>   </li>";
  };
?>
</ul>
<?php
require_once "./blocks/footer.php";
?>

