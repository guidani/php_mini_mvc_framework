<?php

namespace Me\Minimvc\App;

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
    try {
      return $this->routes;
    } catch (\Throwable $e) {
      $e->getMessage();
      die();
    }
  }

  private function setRoutes(array $routes)
  {
    try {
      $this->routes = $routes;
    } catch (\Throwable $e) {
      $e->getMessage();
      die();
    }
  }

  private function initRoutes()
  {
    try {
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
    } catch (\Throwable $e) {
      $e->getMessage();
      die();
    }
  }

  public function run($url)
  {
    try {
      foreach ($this->getRoutes() as $key => $route) {
        if ($url == $route['route']) {
          $class = "Me\\Minimvc\\App\\Controllers\\" . $route['controller'];
          $controller = new $class;
          $action = $route['action'];
          $controller->$action();
        }
      }
    } catch (\Throwable $e) {
      echo $e->getMessage();
      die();
    }
  }

  public function getUrl()
  {
    try {
      return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    } catch (\Throwable $e) {
      $e->getMessage();
      die();
    }
  }
}
