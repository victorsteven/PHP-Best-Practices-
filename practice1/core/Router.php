<?php


class Router {

  protected $routes = [];

  public static function load($file) {
    //create a new router instance:
    //we created an instance method, but we saved it to router
    $router = new static;

    require $file;

    return $router;
  }

  public function define($routes) {

    $this->routes = $routes;
  }

  public function direct($uri) {
    //note key is the gotten from the route array
    if(array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }

    throw new Exception('No route seen');
  }
}