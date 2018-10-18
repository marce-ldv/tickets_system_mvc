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

    public function login()
    {
        require(URL_VISTA . "login.php");        
    }

    public function register(){
        require(URL_VISTA . "register.php");   
        //$this->userDao->addUser($usr);
    }

    public function viewLogin(){
        include(ROOT . 'view\login.php');
    }

    public function viewRegister(){
        include(ROOT . 'view\registrarse.php');
    }




}
