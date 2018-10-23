<?php

namespace Controller;
use Dao\UserDAO as UserDao;
use Model\User as User;

// TODO: HAY QUE MODIFICAR LA LLAMADA A LAS VISTAS, DEBE LLAMAR AL METODO DE LA CONTROLADORA Y NO USAR REQUIRED NI INCLUDE
class UserController{

    protected $userDao;

    function __construct() {
        $this->userDao = UserDao::getInstance();
    }

    public function index(){
        require(URL_VIEW . "home.php");
    }

    public function login(){
        require(URL_VIEW . "login.php");
    }
    public function register ($nickname,$pass,$email) {

      try {
    			$regComplete = FALSE;

    			$user_dao = $this->userDao;

    			if ( ! $user_dao->verifyEmail($email)) {
    				if ( ! $user_dao->verifyNickname($nickname)) {
    					$user = new User($nickname,$pass,$email);
    					$id_usuario = $user_dao->addUser($user);
    					$user->setIdUser($id_usuario);
    					$regComplete = TRUE;
    				}
    			}
    			switch ($regComplete) {

    				case TRUE:
    				require(URL_VIEW . 'home.php');
    				break;

    				case FALSE:
    				require(URL_VIEW . "register.php");
    				break;
    			}

    		} catch(\PDOException $pdo_error) {
    			require(URL_VISTA . "registrarse.php");
    		} catch(\Exception $error) {
                echo $error->getMessage();
                die();
    		}

    }



}
