<?php

namespace Controller;
use Dao\UserDAO as UserDao;
use Model\User as User;

// TODO: HAY QUE MODIFICAR LA LLAMADA A LAS VISTAS, DEBE LLAMAR AL METODO DE LA CONTROLADORA Y NO USAR REQUIRED NI INCLUDE
class UserController{

  public $messageSucess = "Registro Exitoso";
  public $messageWrong = "Hubo un problema y no se pudo completar el registro";

    protected $userDao;

    function __construct() {
        $this->userDao = UserDao::getInstance();
    }

    public function index(){
      require(URL_VIEW . "home.php");
    }

    public function login($username,$pass){
        try{
          $user_dao = $this->userDao->readByUser($username);
          print_r($user_dao);

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
    					$id_usuario = $user_dao->addUser($user);
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
            $alert = $this->$messageWrong;
    				require(URL_VIEW . "register.php");
            require(URL_VIEW . "footer.php");
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
