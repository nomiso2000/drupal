<?php

namespace App\Controllers;

use App\Models\User;

class Users extends AbstractController {
  public function view()
  {
    $entityManager = getEntityManager();
    $userRepository = $entityManager->getRepository(User::class);
    $vars['items'] = $userRepository->findAll();
    $content = $this->viewTemplate('users',  $vars );
    $title = 'User list';
    return $this->viewWrapper($title, $content);
  }
}