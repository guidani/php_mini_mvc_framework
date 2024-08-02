<?php

namespace Me\Minimvc\App\Utils;

use stdClass;

abstract class Action
{
  protected $view;

  public function __construct()
  {
    $this->view = new stdClass();
  }

  /**
   * 
   * @param string $view Obrigatório. Nome da view.
   * @param string $layout Opcional. nome do layout.
   * @param string $pageTitle Opcional. Título da página.
   */
  protected function render(string $view, string $layout = null, string $pageTitle = null)
  {
    try {
      $this->view->page = $view;
      $this->view->pageTitle = $pageTitle;
      if (!$layout) {
        $layout = "_layout";
      }
      require_once __DIR__ . "/../Views/templates/$layout.php";
    } catch (\Throwable $e) {
      $e->getMessage();
      die();
    }
  }

  protected function content()
  {
    try {
      $classAtual = get_class($this);
      $classAtual = str_replace("Me\\Minimvc\\App\\Controllers\\", "", $classAtual);
      $classAtual = strtolower(str_replace("Controller", "", $classAtual));
      require_once __DIR__ . "/../Views/$classAtual/" . $this->view->page . ".php";
    } catch (\Throwable $e) {
      $e->getMessage();
      die();
    }
  }
}
