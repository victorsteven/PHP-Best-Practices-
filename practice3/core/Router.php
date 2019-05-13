<?php


class Router {

  public $routes = [
    'GET' => [], 
    'POST' => []
  ];

  public static function load($file) {
    //create a new router instance:
    //we created an instance method, but we saved it to router
    $router = new static;

    require $file;

    return $router;
  }

  // public function define($routes) {

  //   $this->routes = $routes;
  // }

  public function get($uri, $controller) {
    //store the $controller in the $uri key in the GET array inside the router array
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller) {
    $this->routes['POST'][$uri] = $controller;
  }

  public function direct($uri, $requestType) {
    //note key is the gotten from the route array
    if(array_key_exists($uri, $this->routes[$requestType])) {
      return $this->routes[$requestType][$uri];
    }

    throw new Exception('No route seen');
  }
}