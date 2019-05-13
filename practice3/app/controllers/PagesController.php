<?php

namespace App\Controllers;

class PagesController {


  public function home(){

    // die('home');

    // $users = App::get('database')->selectAll('users');

    // require 'views/index.view.php';
    // return view('index', compact('users'));
    return view('index');
  }

  public function about() 
  {
    // require 'views/about.view.php';
    $company = "Chod";
    return view('about', [
      'company' => $company
    ]);


  }

  public function contact() {

    // require 'views/contact.view.php';
    return view('contact');
    
  }
}