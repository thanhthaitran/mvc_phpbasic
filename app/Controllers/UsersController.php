<?php

  namespace App\Controllers;

  use App\Models\User;

  class UsersController extends Controller {
    public function show()
    {
      $user = new User();
      $result = $user->all();
      $data['result'] = $result;
      view('users.show', $data);
    }
  }