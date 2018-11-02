<?php

namespace controller;
use dao\UserDAO as UserDao;
use model\User as User;
use controller\Controller as Controller;

// TODO: HAY QUE MODIFICAR LA LLAMADA A LAS VISTAS, DEBE LLAMAR AL METODO DE LA CONTROLADORA Y NO USAR REQUIRED NI INCLUDE
class UserController extends Controller{

  public $messageSucess = "Registro Exitoso";
  public $messageWrong = "Hubo un problema y no se pudo completar el registro";

  protected $userDao;

  // TODO: IMPLEMENTAR CLASE CONCRETA PARA NO REPETIR CODIGOO

  function __construct() {
    parent::__construct();
    $this->userDao = UserDao::getInstance();
  }

  public function index(){
    $this->indexView();
  }

  public function login($username,$pass){
    try{
      $user= $this->userDao->readByUser($username);
      //$session->user = $this->user_dao->serialize();
      if( ! $user ){
        $this->viewController->register();
      }

      if(password_verify($pass,$user->getPassword() ) ){
        //una vez que verifico que las password coinciden, antes de autoredireccionar al usuario, trabajamos con session
        $this->session->token = $user->serialize();

        $this->viewController->dashboard();

      }else{
        $this->viewController->login();
      }

    } catch(\PDOException $pdo_error) {
        $this->viewController->login();
    } catch(\Exception $error) {
      echo $error->getMessage();
      die();
    }
  }
  public function register ($username,$pass,$email) {

    try {
      $regComplete = FALSE;

      $user_dao = $this->userDao;
      // TODO: Conviene modularizar y haverificar el usuario en la misma controladora
      if ( ! $user_dao->readByUser($username) && (! $user_dao->readByUser($email))) {
        //encriptacion de password
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        //creacion de user con pass encriptada
        $user = new User($username,$hash,$email);
        $id_usuario = $user_dao->create($user);
        $user->setIdUser($id_usuario);
        $regComplete = TRUE;
      }
      switch ($regComplete) {

        case TRUE:
        require(URL_VIEW . "header.php");
        $alert = $this->messageSucess;
        require(URL_VIEW . 'home.php');
        require(URL_VIEW . "footer.php");
        break;

        case FALSE:
        require(URL_VIEW . "header.php");
        $alert = $this->messageWrong;
        require(URL_VIEW . "register.php");
        require(URL_VIEW . "footer.php");
        break;
      }

    } catch(\PDOException $pdo_error) {
      $this->viewController->registrarse();
    } catch(\Exception $error) {
      echo $error->getMessage();
      die();
    }

  }



}
