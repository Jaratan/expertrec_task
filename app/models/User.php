<?php
  class User {
    private $db;
    public function __construct(){
      $this->db = new Database;
    }

      //login user
    public function login($email, $password){

      $this->db->query('SELECT * from users WHERE user_email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();      
      if($password==$row->user_password)
      {   return $row;  }
      else
      {   return false;   } 
      
    }
      //find user by name
     public function findUserByEmail($email){
      $email = $email;
      $this->db->query('SELECT * FROM users WHERE user_email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
}