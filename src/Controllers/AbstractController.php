<?php

namespace App\Controllers;


abstract class AbstractController {

  abstract public function view();

  public function viewWrapper(string $title, string $content) {
    $time = time();
    ob_start();
    require __DIR__.'/../templates/html.php';
    return ob_get_clean();
  }

  public function viewTemplate(string $template, array $variables = []) {
    $template_file = __DIR__.'/../templates/'.$template.'.html.php';
    if(!file_exists($template_file)) {
          $template_file = __DIR__.'/../templates/notFound.html.php';
    }
    ob_start();
    require $template_file;
    $output =  ob_get_clean();
    return  $output;
        // return  $template_file;
  }

}