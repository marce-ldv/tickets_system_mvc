<?php

namespace Controller;
use Dao\UserDAO as UserDao;

/**
 * summary
 */
class ViewController
{
    /**
     * summary
     */
    public function __construct(){

    }

    public function index(){
    	require(URL_VIEW . "home.php");
    }

    public function register(){
    	require(URL_VIEW . "register.php");
    }

    public function login(){
    	require(URL_VIEW . "login.php");
    }
}
