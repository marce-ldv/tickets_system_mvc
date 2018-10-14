<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	/**
	 * Archivos necesarios de inicio
	 */
	require 'Config/autoload.php';
	require 'Config/config.php';

	/**
	 * Alias
	 */
	use Config\Autoload as Autoload;
	use Model\User as User;
    use DAO\UserDAO as UserDAO;
    	
    //llama al metodo start del autoload
	Autoload::start();
	//header('location:ROOT. view\login.php');
	//include(ROOT . 'view\login.php');
	$router= new Router(new Request());
	$userDAO = new UserDAO();

	/*
	//Agregar un Usuario
	$user = new User();
	$user->setName('Pepe');
	$user->setEmail('pepegonzales@gmail.com');
	$user->setPassword('1234');
	$userDAO->addUser($user);
	*/

?>