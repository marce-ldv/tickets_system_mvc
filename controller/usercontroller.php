<?php namespace controller;
use dao\UserDAO as UserDao;

class UserController{

    $private userDao;

    public function __construct(){
        $this->userDao = new UserDao();
    }

    public function login($name,$pass){
        $this->userDao->login($name,$pass);
    }

    public function register(){
        
    }

    public function viewLogin(){
        include(ROOT . 'view\login.php');
    }

    public function viewRegister(){
        include(ROOT . 'view\registrarse.php');
    }



    
}
