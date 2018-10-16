<?php

namespace Controller;


class UserController{

    protected $userDao;

    public function __construct()
    {
    }

   public function index()
    {
        require(URL_VISTA . "home.php");
    }

    public function login($name,$pass){
        //$this->userDao->login($name,$pass);
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
