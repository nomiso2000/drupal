<?php
namespace App\Controllers;
session_start();
use App\Models\User;

class Login extends AbstractController {

    public function view()
    {
        $entityManager = getEntityManager();
      if($_POST) {
        $userRepository = $entityManager->getRepository(User::class);
        $user = $userRepository ->find($_POST['email']);
        if(empty($user)) {
          header('Location: /login');
        }
        if($user->getPassword() === $_POST['password']) {
        $_SESSION["user"] = $user->getId();
        header('Location: /todo');
        }
        // $entityManager->persist($user);
        // $entityManager->flush($user);
        // header("Location: /register");
      }
    // $userRepository = $entityManager->getRepository(User::class);
    // $user = $userRepository->find();
        $content = $this->viewTemplate('login', []);
        $title = 'Login';
        return $this->viewWrapper($title, $content);
  }
}