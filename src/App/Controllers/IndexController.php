<?php

namespace Me\Minimvc\App\Controllers;

use Me\Minimvc\App\Utils\Action;

use Me\Minimvc\App\Models\Produto;
use Me\Minimvc\App\Services\Databases\MySqlDatabaseService;


class IndexController extends Action
{

  public function index()
  {
    try {
      // Exemplo de conexão
      //$conn = MySqlDatabaseService::getConnection();
      //$prod = new Produto($conn);
      //$prods = $prod->getProdutos();
      //$this->view->dados = $prods;

      $this->render($view = "index", $layout = "_indexLayout", $pageTitle = "Home");
    } catch (\Throwable $e) {
      echo $e->getMessage();
      die();
    }
  }

  public function sobreNos()
  {
    try {
      $this->view->dados = array();
      $this->render($view = "sobreNos", $layout = "_sobreNosLayout");
    } catch (\Throwable $e) {
      echo $e->getMessage();
      die();
    }
  }
}
