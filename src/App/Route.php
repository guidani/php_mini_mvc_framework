<?php

namespace Gdsd1\Minimvc\App;

class Route
{

  private $routes;

  public function __construct()
  {
    $this->initRoutes();
    $this->run($this->getUrl());
  }

  public function getRoutes()
  {
    return $this->routes;
  }

  public function setRoutes(array $routes)
  {
    $this->routes = $routes;
  }

  public function initRoutes()
  {
    $routes['home'] = array(
      'route' => '/',
      'controller' => 'IndexController',
      'action' => 'index'
    );

    $routes['sobre_nos'] = array(
      'route' => '/sobre_nos',
      'controller' => 'IndexController',
      'action' => 'sobreNos'
    );

    $this->setRoutes($routes);
  }

  public function run($url)
  {
    try {
      foreach ($this->getRoutes() as $key => $route) {
        if ($url == $route['route']) {
          $class = "Gdsd1\\Minimvc\\App\\Controllers\\" . $route['controller'];
          $controller = new $class;
          $action = $route['action'];
          $controller->$action();
        }
      }
    } catch (\Throwable $th) {
      echo $th->getMessage();
    }
  }

  public function getUrl()
  {
    // echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}
