<?php
namespace App\Controllers;
session_start();

class Logout extends AbstractController {
    public function view() {
      unset($_SESSION['user']);
      header('Location: /login');
    }
}
