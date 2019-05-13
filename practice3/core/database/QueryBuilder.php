<?php

class QueryBuilder {

  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table) {

    $data = $this->pdo->prepare("select * from {$table}");

    $data->execute();

    return $data->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters) {

    // $arr = ['one','two', 'three'];
    // $thelist = implode(',', $arr);
    // die(var_dump($thelist));

    // die(var_dump(array_keys($parameters)));

    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table, 
      implode(',', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {

      // die(var_dump($sql));
      $statement = $this->pdo->prepare($sql);

      //of course, we can bind our params here, but we can pass it straight to the execute method 
      $statement->execute($parameters);

    } catch(Exception $e) {
      die('Whoops, something went wrong');
    }
  }
}