<?php

  namespace App\Controllers;

  use App\Models\User;

  class UsersController {
    public function index()
    {
      $user           = new User();
      $result         = $user->all();
      $data['result'] = $result;
      view('users.index', $data);
    }
    public function add()
    {
      if(isset($_POST['add'])){
        $full_name = $_POST['fullname'];
        $user_name = $_POST['username'];
        $email     = $_POST['email'];
        $password  = $_POST['password'];
        $phone     = $_POST['phone'];
        $add       = new User();
        $result    = $add->insert($full_name,$user_name,$email,$password,$phone);
        if($result){
          header("LOCATION:/users/index?msg=Bạn đã thêm thành công");
          exit();
        }
      }
      view('users.add-user');
    }
    public function edit($id)
    {
      $user = new User();
      $result = $user->find($id);
      $data['result'] = $result;
      if(isset($_POST['edit'])){
        $idu      = $_POST['id'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $phone    = $_POST['phone'];
        $result   = $user->update($fullname,$username,$email,$password,$phone,$idu);
        if($result){
          header("LOCATION:/users/index?msg=Bạn sửa thành công");
          exit();
        }
      }
      view('users.edit-user', $data);
    }
  }