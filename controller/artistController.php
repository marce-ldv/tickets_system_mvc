<?php

namespace controller;

use model\Artist;
use dao\ArtistDAO;
use helpers\Session;

class ArtistController{

	private $artistDao;
	private $session;

    public function __construct()
    {
    	$this->session = Session::getInstance();
    	$this->artistDao = ArtistDAO::getInstance(); // te devuelve la instancia de la bbdd de artista
    }

    public function save($name)
    {

    	$nuevoArtist = new Artist($name);
    	$mensaje[0] = "EL ARTISTA SE AGREGO CON EXITO !! :D ";
    	$mensaje[1] = "success";
    	try{
    		$this->artistDao->create($nuevoArtist);
	    }catch(\PDOException $e){
	    	$mensaje[0] = "UPS! ERROR PDO: " . $e->getMessage() . "| CODE: " . $e->getCode();
	    	$mensaje[1] = "danger";

	    }catch(\Exception $e){
	    	$mensaje[0] = "UPS! ERROR EXCEPTION: " . $e->getMessage() . "| CODE: " . $e->getCode();
	    	$mensaje[1] = "danger";
	    }

    	include URL_VIEW . 'header.php';
      	require(URL_VIEW . "artist.php");
      	include URL_VIEW . 'footer.php';
    }

    public function create()
    {
    	//if($this->session->__isset('rol')){
    	//	$rol = $this->session->__get('rol');
    	//	if($rol === 'admin'){
    			include URL_VIEW . 'header.php';
	      		require(URL_VIEW . "viewArtist/artistCreate.php");
	      		include URL_VIEW . 'footer.php';
    	//	}else {
    	//		echo "NO TENES SUFICIENTES PRIVILEGIOS";
    	//	}
    	//}else {
    	//	echo "SIN PRIVILEGIOS";
    	//}
	    	
    }

    public function list() //listar todo
    {
    	$listArtists = $this->artistDao->readAll();

    	include URL_VIEW . 'header.php';
	    require(URL_VIEW . "viewArtist/listArtist.php");
	    include URL_VIEW . 'footer.php';

    } 



}
