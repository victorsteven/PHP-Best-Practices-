<?php

class Connection {

  // public static function make() {

  //   try {
  //     return new PDO('mysql:host=127.0.0.1;dbname=todo', 'steven', 'here');
    
  //   } catch(PDOException $e) {
  //     die($e->getMessage());
  //   }
  // }

  public static function make($config) {

    try {
      // return new PDO('mysql:host=127.0.0.1;dbname=todo', 'steven', 'here');

      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'], 
        $config['password'],
        $config['options']
      );
    
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }
}