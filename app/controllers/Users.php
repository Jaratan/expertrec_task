  <?php
  class Users extends Controller{
    public function __construct(){
      $this->userModel = $this->model('User');
      $this->postModel = $this->model('Post');

    }
    
    //login 

    public function login(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

       
        $data =[
          'email' => trim($_POST['user_email']),
          'password' => trim($_POST['user_password']),
          'email_err' => '',
          'password_err' => ''
        ];
        //var_dump($data)
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter email';
        }

        //validate password
         if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        } 

        //check for username
        if($this->userModel->findUserByEmail($data['email'])){

        }else{
          $data['email_err'] = "No user found";
        }

           //make sure error are empty
         if(empty($data['email_err']) && empty($data['password_err'])){
          
          //check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if($loggedInUser)
          {
            $this->createUserSession($loggedInUser);
            //die("success");
          }else{
            $data['password_err'] = 'Passowrd incorrect';

            $this->view('users/login',$data);
          }
        }
        else{
          $this->view('users/login',$data);
        }


      }else{

        $data =[
          'email' => '',
          'password' =>'',
          'email_err' =>'',
          'password_err' => ''
        ];

        //load register view

        $this->view('users/login', $data);
      }
    }

     public function createUserSession($user){
      $_SESSION['user_id'] = $user->user_id;
      $_SESSION['user_name'] = $user->user_name;
      $_SESSION['user_email'] = $user->email;

      if(isset($_SESSION['addedto']))
      {
        $this->postModel->addProductToCart1();
      }
      redirect('pages/index');
    }
  

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_name']);

      session_destroy();
      redirect('index');
    }

    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
        return true;
      }else{
        return false;
      }
    }
}  

