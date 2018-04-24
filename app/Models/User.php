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

    public function update($fullname,$username,$email,$password,$phone, $id){
      $sql = "UPDATE {$this->table} SET fullname = '$fullname', username = '$username', 
              email = '$email', password = '$password', phone = '$phone' where id = '$id';";
      $stmt = static::$db->prepare($sql);
      return $stmt->execute();
    }

    public function delete($id){
      $sql = "delete from users where id = '$id'";
      $stmt = static::$db->prepare($sql);
      return $stmt->execute();
    }
  }