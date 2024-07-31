<?php

namespace Gdsd1\Minimvc\App\Controllers;

use Gdsd1\Minimvc\App\Services\Databases\MySqlDatabaseService;
use Gdsd1\Minimvc\App\Utils\Action;
use Produto;

class IndexController extends Action
{

  public function index()
  {

    $conn = MySqlDatabaseService::getConnection();
    $prod = new Produto($conn);
    $prods = $prod->getProdutos();

    $this->view->dados = $prods;
    $this->render($view = "index", $layout = "_indexLayout", $pageTitle = "Home");
  }

  public function sobreNos()
  {
    $this->view->dados = array();
    $this->render($view = "sobreNos", $layout = "_sobreNosLayout");
  }
}
