<?php

namespace controller;
use dao\UserDAO as UserDao;
use model\User as User;
use controller\ViewController as ViewController;

// TODO: HAY QUE MODIFICAR LA LLAMADA A LAS VISTAS, DEBE LLAMAR AL METODO DE LA CONTROLADORA Y NO USAR REQUIRED NI INCLUDE
class UserController{

  public $messageSuccess = "Registro Exitoso";
  public $messageWrong = "Hubo un problema y no se pudo completar el registro";

    protected $userDao;
    private $viewController;

    function __construct() {
        $this->userDao = UserDao::getInstance();
        $this->viewController = new ViewController();
    }

    public function index(){
      require(URL_VIEW . "home.php");
    }

    public function login($username,$pass){
        try{
          $user_dao = $this->userDao->readByUser($username);
          //$session->user = $user_dao->serialize();

        } catch(\PDOException $pdo_error) {
          require(URL_VIEW . "header.php");
    			require(URL_VIEW . "registrarse.php");
          require(URL_VIEW . "footer.php");
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

    }



}
