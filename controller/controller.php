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
    if( ! isset($this->session->token))
      return false;

    $user = new User();
    $user->unserialize($this->session->token);
    return $user;
  }

  public function isLogged(){
    return ($this->getToken() ? true : false);
  }

  public function redirect($url){
    header("location: ". VIEW_URL . $url);
  }


}
