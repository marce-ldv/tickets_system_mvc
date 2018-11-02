<?php

namespace controller;
use dao\UserDAO as UserDao;
use model\User as User;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use helpers\Session as Session;
>>>>>>> 17a4373c224feb3e215537f8efd4dc977e669080
use controller\ViewController as ViewController;
=======
use controller\Controller as Controller;
>>>>>>> a5b2be7cf7f58dc8bf0991991863852c7785486f

// TODO: HAY QUE MODIFICAR LA LLAMADA A LAS VISTAS, DEBE LLAMAR AL METODO DE LA CONTROLADORA Y NO USAR REQUIRED NI INCLUDE
class UserController extends Controller{

  public $messageSuccess = "Registro Exitoso";
  public $messageWrong = "Hubo un problema y no se pudo completar el registro";
<<<<<<< HEAD
<<<<<<< HEAD

    protected $userDao;
    private $viewController;

    function __construct() {
        $this->userDao = UserDao::getInstance();
        $this->viewController = new ViewController();
    }

    public function index(){
      require(URL_VIEW . "home.php");
=======
  public $session;
  private $viewController;
=======
>>>>>>> a5b2be7cf7f58dc8bf0991991863852c7785486f

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
        $this->redirect('/default/register');
      }

      if(password_verify($pass,$user->getPassword() ) ){
        //una vez que verifico que las password coinciden, antes de autoredireccionar al usuario, trabajamos con session
        $this->session->token = $user->serialize();

        $this->redirect('/default/dashboard');

      }else{
        $this->redirect('/default/login');
      }

    } catch(\PDOException $pdo_error) {
        $this->viewController->login();
    } catch(\Exception $error) {
      echo $error->getMessage();
      die();
>>>>>>> 17a4373c224feb3e215537f8efd4dc977e669080
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
      $this->redirect('/default/register');
    } catch(\Exception $error) {
      echo $error->getMessage();
      die();
    }
<<<<<<< HEAD
    public function register ($username,$pass,$email) {

      try {
    			$regComplete = FALSE;

    			$user_dao = $this->userDao;
          // TODO: Conviene modularizar y haverificar el usuario en la misma controladora
    			if ( ! $user_dao->readByUser($username) && (! $user_dao->readByUser($email))) {
    					$user = new User($username,$pass,$email);
    					$id_usuario = $user_dao->create($user);
    					$user->setIdUser($id_usuario);
    					$regComplete = TRUE;
    			}
    			switch ($regComplete) {

    				case TRUE: $this->viewController->index($this->messageSuccess);
    				break;

    				case FALSE: $this->viewController->index($this->messageWrong);
    				break;
    			}

    		} catch(\PDOException $pdo_error) {
          require(URL_VIEW . "header.php");
    			require(URL_VIEW . "registrarse.php");
          require(URL_VIEW . "footer.php");
    		} catch(\Exception $error) {
                echo $error->getMessage();
                die();
    		}
=======
>>>>>>> 17a4373c224feb3e215537f8efd4dc977e669080

  }

  public function logout()
  {
    $this->session->destroy();
    $this->redirect('/');
  }

}
