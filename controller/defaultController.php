<?php

namespace controller;
use model\User as User;
use helpers\Session as Session;
use dao\UserDAO as UserDao;
use controller\Controller as Controller;

class DefaultController extends Controller{

  public function index(){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "home.php");
    include URL_VIEW . 'footer.php';
  }

  public function register(){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "register.php");
    include URL_VIEW . 'footer.php';
  }

  public function login(){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "login.php");
    include URL_VIEW . 'footer.php';
  }

  public function dashboard(){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "dashboard.php");
    include URL_VIEW . 'footer.php';
  }

  public function viewArtist(){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "viewArtist/artistCreate.php");
    include URL_VIEW . 'footer.php';
  }


}
