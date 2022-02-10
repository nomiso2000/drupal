<?php
if(isset($_POST['submit'])) {
  $name=$_POST['name'];
  $mail=$_POST['mail'];
  $subject=$_POST['subject'];

  echo "$name, $mail, $subject";
}