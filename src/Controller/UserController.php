<?php

namespace Controller;
use DAO\UserDAO as UserDao;


class UserController{

    protected $userDao;

    function __construct(){
        $this->userDao = UserDao::getInstance();
    }

    public function index(){
        require(URL_VIEW . "home.php");
    }

    public function login(){
        require(URL_VIEW . "login.php"); 
    }

    public function register($nickname,$pass,$email){

          try{

			$regComplete = FALSE;
			$user_dao = $this->userDao;

			//if(!$user_dao->verificarEmail($email))
			//{

				//if(!$user_dao->verificarNickname($nickname))
				//{

					$user = new User($nickname,$pass,$email);
					$id_usuario = $user_dao->addUser($user);
					$user->setIdUser($id_usuario);
					$regComplete = TRUE;
				//}
			//}
			switch ($regComplete) {
                
				case TRUE:
				require(URL_VIEW . 'home.php');
				break;

				case FALSE:
				require(URL_VIEW . "register.php");
				break;
			}

		}catch(\PDOException $pdo_error){
			require(URL_VISTA . "registrarse.php");
		}catch(\Exception $error){
            echo $error->getMessage();
            die();
		}

    }

    

}
