<?php

namespace controller;
use dao\UserDAO as UserDao;


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

    public function listArtists($listArtists = null){
      include URL_VIEW . 'header.php';
  		require(URL_VIEW . "viewArtist/listArtist.php");
  		include URL_VIEW . 'footer.php';
    }


}
