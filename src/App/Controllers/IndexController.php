<?php

namespace Gdsd1\Minimvc\App\Controllers;

use Gdsd1\Minimvc\App\Utils\Action;

class IndexController extends Action
{

  public function index()
  {
    $this->view->dados = array("1", "asd");
    $this->render($view = "index", $layout = "_indexLayout", $pageTitle = "Home");
  }

  public function sobreNos()
  {
    $this->view->dados = array("teste1", "teste2");
    $this->render($view = "sobreNos", $layout = "_sobreNosLayout");
  }
}
