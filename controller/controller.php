<?php

namespace controller;
//use dao\UserDAO as UserDao;
//use model\User as User;
//use helpers\Session as Session;
//use controller\ViewController as ViewController;

class Controller{

  protected $session;
  protected $viewController;

  public function __construct(){
    $this->session = Session::getInstance();
    $this->viewController = new ViewController();
  }

  

}
