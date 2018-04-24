<?php

  namespace App\Controllers;

  use App\Models\User;

  class UsersController {
    
    public function index()
    { 
      $limit            = 5;
      $user             = new User();
      if(isset($_GET["page"])){
        $current_page=$_GET["page"];
      }else{
        $current_page=1;
      }
      $rowcount         = $user->row();
      $paginate         = ceil($rowcount/$limit);
      $offset = ($current_page - 1) * $limit;
      $result           = $user->show(['*'], $offset, $limit);
      $data['paginate'] = $paginate;
      $data['result']   = $result;
      $data['current_page'] = $current_page;
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
        $result_edit   = $user->update($fullname,$username,$email,$password,$phone,$idu);
        if($result_edit){
          header("LOCATION:/users/index?msg=Bạn sửa thành công");
          exit();
        }
      }
      view('users.edit-user', $data);
    }

    public function del($id){
      $user   = new User();
      $result = $user->delete($id);
      if($result){
        header("LOCATION:/users/index?msg=Bạn sửa thành công");
        exit();
      }
    }
  }