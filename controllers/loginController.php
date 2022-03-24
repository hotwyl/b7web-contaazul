<?php
class loginController extends controller
{

    // public function __construct() {
    //     parent::__construct();

    //     $u = new Users();
    //     if($u->isLogged() === false){
    //        header("Location: ".BASE_URL+"/login"); 
    //     }
    // }

    public function index()
    {
        $data = array();

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes(trim($_POST['email']));
            $pass = addslashes(trim($_POST['password']));

            $u = new Users();

            if($u->doLogin($email, $pass)){
                header("Location: ".BASE_URL);
                exit;
            }else{
                $data['error'] = 'E-mail e/ou senha errados.';
            }
        }

        $this->loadView('login', $data);
    }
}
