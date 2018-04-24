<?php

  namespace App\Controllers;

  use App\Models\User;

  class UsersController {
    public function index()
    {
      $user = new User();
      $result = $user->all();
      $data['result'] = $result;
      view('users.index', $data);
    }
    public function add()
    {
      view('users.add-user');
    }
    public function edit()
    {
      view('users.edit-user');
    }
  }