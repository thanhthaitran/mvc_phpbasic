<?php

  namespace App\Models;

  class User extends Model
  {
    protected $table = 'users';

    public function insert($fullname,$username,$email,$password,$phone){
      $sql = "INSERT INTO {$this->table}(fullname,username,email,password,phone) VALUES ('$fullname','$username','$email','$password','$phone')";
      $stmt = static::$db->prepare($sql);
      return $stmt->execute();
    }
  }