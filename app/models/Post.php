<?php
  class Post {
    private $db;
    public function __construct(){
      $this->db = new Database;
    }

    public function getProducts()
    {
      $this->db->query("SELECT * from products");
      $results = $this->db->resultSet();

      return $results;
    }

    public function addProductToCart($product_id)
    {
      $this->db->query("UPDATE cart_products SET cart_status='I' WHERE product_id=:product_id AND user_id=:user_id");
      $this->db->bind(':product_id',$product_id);
      $this->db->bind(':user_id',$_SESSION['user_id']);

      $this->db->execute();

      $this->db->query('INSERT into cart_products(product_id,user_id) VALUES(:product_id,:user_id)');

      $this->db->bind(':product_id',$product_id);
      $this->db->bind(':user_id',$_SESSION['user_id']);

      if($this->db->execute())
      { return true;  }
      else
      { return false; }
    }

    public function addProductToCart1()
    {
      foreach ($_SESSION['addedto'] as $key => $value)
      {
        if($value!=0)
        {
          $this->db->query("UPDATE cart_products SET cart_status='I' WHERE product_id=:product_id AND user_id=:user_id");
          $this->db->bind(':product_id',$product_id);
          $this->db->bind(':user_id',$_SESSION['user_id']);

          $this->db->execute();
          
          $this->db->query('INSERT into cart_products(product_id,user_id) VALUES(:product_id,:user_id)');

          $this->db->bind(':product_id',$value);
          $this->db->bind(':user_id',$_SESSION['user_id']);

          $this->db->execute();
        }
      }
      return true;
    }

    public function cartProducts($product_id)
    {      

      $this->db->query("SELECT * FROM products WHERE product_id IN($product_id)");
      $results = $this->db->resultSet();

      return $results;
    }

    public function getCartProducts($user_id)
    {
      $this->db->query("SELECT * FROM cart_products WHERE user_id=:user_id AND cart_status='A'");
      $this->db->bind(':user_id',$user_id);

      $results = $this->db->resultSet();
      return $results;
    }

  }
?>