<?php

  namespace App\Models;

  class User extends Model
  {
    protected $table = 'users';

    public function show($fields = ['*'], $offset, $limit) {
      $fields = implode(',', $fields);
      $sql = "SELECT {$fields} FROM {$this->table} limit $offset,$limit";
      $stmt = static::$db->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function insert($fullname,$username,$email,$password,$phone){
      $sql = "INSERT INTO {$this->table}(fullname,username,email,password,phone) VALUES ('$fullname','$username','$email','$password','$phone')";
      $stmt = static::$db->prepare($sql);
      $stmt->execute();

      return $stmt->excute();
    }

    public function update($fullname,$username,$email,$password,$phone, $id){
      $sql = "UPDATE {$this->table} SET fullname = '$fullname', username = '$username', 
              email = '$email', password = '$password', phone = '$phone' where id = '$id';";
      $stmt = static::$db->prepare($sql);
      return $stmt->execute();
    }

    public function delete($id){
      $sql = "delete from {$this->table} where id = '$id'";
      $stmt = static::$db->prepare($sql);
      return $stmt->execute();
    }

    public function row(){
      $sql = "select count(id) from {$this->table}";
      $stmt = static::$db->prepare($sql);
      $stmt->execute();
      $row = $stmt->fetchColumn();
      return $row;
    }
  }