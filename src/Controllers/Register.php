<?php

namespace App\Controllers;
use App\Models\User;

class Register extends AbstractController {

    public function view()
    {
      $entityManager = getEntityManager();
      if($_POST) {
        $user = new User($_POST['email'], $_POST['password']);
        $entityManager->persist($user);
        $entityManager->flush($user);
        header("Location: /login");
      }
        $content = $this->viewTemplate('register', []);
        $title = 'Register';
        return $this->viewWrapper($title, $content);
    }
}