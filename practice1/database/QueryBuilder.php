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
}