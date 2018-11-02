<?php

namespace controller;
use model\User as User;
use helpers\Session as Session;
use dao\UserDAO as UserDao;

class Controller{

  protected $session;
  //protected $viewController;

  public function __construct(){
    $this->session = Session::getInstance();
    //$this->viewController = new ViewController();
  }

  public function getToken(){
    if( ! isset($session->token))
      return false;

    $user = new User();
    $user->unserialize($session->token);
    return $user;
  }

  public function isLogged(){
    return ($this->getToken()) ? true : false;
  }

  public function indexView(){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "home.php");
    include URL_VIEW . 'footer.php';
  }
/*
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

  public function listArtists($listArtists = null){
    include URL_VIEW . 'header.php';
    require(URL_VIEW . "viewArtist/listArtist.php");
    include URL_VIEW . 'footer.php';
  }*/

}
