<?php
namespace App\Controllers;
session_start();
use App\Models\Todo;

class Todos extends AbstractController {
  public function view()
  {
    if(!isset($_SESSION['user'])) {
      header("Location: /login");
    }
    $vars = [];
    $entityManager = getEntityManager();
    $todoRepository = $entityManager->getRepository(Todo::class);

    // *******************CTEATE TASK***************
    if($_POST) {
      $todo = new Todo($_SESSION['user'], $_POST['todo'], false);
      $entityManager->persist($todo);
      $entityManager->flush();
    }
    // *******************CTEATE TASK***************

    // *******************CHANGE TASK STATUS***************
    if(isset($_GET['id']) && isset($_GET['status'])) {
      $task = $todoRepository->find($_GET['id']);
      $task->changeStatus();
      $entityManager->flush();
      header('Location: /todo');
    }
    // *******************CHANGE TASK STATUS***************

    // *******************DELETE TASK***************
      if(isset($_GET['id']) && isset($_GET['delete'])) {
      $task = $todoRepository->find($_GET['id']);
      $entityManager->remove($task);
      $entityManager->flush();
      header('Location: /todo');
    }
    // *******************DELETE TASK***************
    $vars['items'] = $todoRepository->findAll();
    $content = $this->viewTemplate('todo', $vars);
    $title = 'Todo list';
    return $this->viewWrapper($title, $content);
  }
}