<?php

namespace controller;
use dao\UserDAO as UserDao;
use controller\Controller as Controller;


class ViewController extends Controller {



<<<<<<< HEAD
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

    public function index($alert = null){
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

<<<<<<< HEAD
    public function artistList($listArtists){
      include URL_VIEW . 'header.php';
      require(URL_VIEW . "viewArtist/listArtist.php");
      include URL_VIEW . 'footer.php';
    }
=======
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
=======
>>>>>>> a5b2be7cf7f58dc8bf0991991863852c7785486f


>>>>>>> 17a4373c224feb3e215537f8efd4dc977e669080
}
