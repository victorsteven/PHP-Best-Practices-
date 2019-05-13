<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {
  public function index() {

    $users = App::get('database')->selectAll('users');

    return view('users', ['users' => $users]);
  }

  public function store() {

    // $app['database']->insert('users', [
    //   'name' => $_POST['name']
    // ]);

    App::get('database')->insert('users', [
      'name' => $_POST['name']
    ]);


      return redirect('users');

    // header('Location: /users');
  }
}