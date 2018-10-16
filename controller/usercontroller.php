<?php
namespace controller;
use dao\UserDAO as UserDao;

class UserController{

    private $userDao;

    public function __construct(){
        $this->userDao = new UserDao();
    }

    public function index(){
        include(ROOT . 'view\login.php');
    }

    /*En el if compruebo si user tiene datos, en caso que los contenga hago una validacion
		de password, no necesito validar tambien el username ya que es el que viene en la variable user */
		public function login($username, $password) {
			$user = $this->userDao->read($user);

			if($user){
				if($user->getPassword == $password){
					//logueaste
				}
			}
		}

    public function register(){
        $this->userDao->addUser($usr);
    }

    public function viewLogin(){
        include(ROOT . 'view\login.php');
    }

    public function viewRegister(){
        include(ROOT . 'view\registrarse.php');
    }




}
