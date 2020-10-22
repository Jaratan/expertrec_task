<?php
  class Pages extends Controller {
    
  

    public function __construct(){
    /*if(!isLoggedIn()){
         redirect('users/login');
      }*/
      

     $this->postModel = $this->model('Post');
     $this->userModel = $this->model('User');
    }

    public function index()
    {
      $data = $this->postModel->getProducts();
      $this->view('pages/index',$data);
    }

    public function add_to_cart()
    {
      if(isset($_SESSION['user_id']))
      {
        $product_id = $_POST['product_id'];
        if($this->postModel->addProductToCart($product_id))
        {   redirect('pages/index');   }
        else
        {   redirect('pages/index');   }
      }
      else
      {
        $_SESSION['addedto'][$_POST['product_id']]= $_POST['product_id'];
        redirect('pages/index');
      }
    }

    public function cart()
    {
      $product_id=0;
      if(isset($_SESSION['user_id']))
      {
        $cart_products = $this->postModel->getCartProducts($_SESSION['user_id']);
        foreach ($cart_products as $key => $value)
        { $product_id.=','.$value->product_id;  }
      }
      else
      {
        if(isset($_SESSION['addedto']))
        {
          foreach ($_SESSION['addedto'] as $key => $value)
          { $product_id.=",".$value;  }
        }
      }
      $data = $this->postModel->cartProducts($product_id);
      $this->view('pages/cart',$data);
    }

  }