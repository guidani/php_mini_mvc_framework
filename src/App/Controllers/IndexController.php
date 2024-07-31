<?php

namespace Gdsd1\Minimvc\App\Controllers;

class IndexController
{
  private $view;

  public function __construct()
  {
    $this->view = new \stdClass();
  }
  public function index()
  {
    $this->view->dados = array("1", "asd");
    $this->render("index");
  }

  public function sobreNos()
  {
    $this->view->dados = array("teste1", "teste2");
    $this->render("sobreNos");
  }

  public function render($view)
  {

    $classAtual = get_class($this);
    $classAtual = str_replace("Gdsd1\\Minimvc\\App\\Controllers\\", "", $classAtual);
    $classAtual = strtolower(str_replace("Controller", "", $classAtual));
    require_once __DIR__ . "/../Views/$classAtual/$view.php";
  }
}
