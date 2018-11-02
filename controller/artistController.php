<?php

namespace controller;

<<<<<<< HEAD
<<<<<<< HEAD
use model\Artist as Artist;
use dao\ArtistDAO as ArtistDAO;
use helpers\Session as Session;
=======
use model\Artist;
use dao\ArtistDAO;
use helpers\Session;
<<<<<<< HEAD
use controller\ViewController as ViewController;
>>>>>>> 17a4373c224feb3e215537f8efd4dc977e669080
=======
//use controller\ViewController as ViewController;
>>>>>>> a5b2be7cf7f58dc8bf0991991863852c7785486f
=======
use model\Artist as Artist;
use dao\ArtistDAO as ArtistDAO;
use controller\Controller as Controller;
>>>>>>> 03de3388d37319ece6819a8db69389fb955fc6b9

class ArtistController extends Controller{

	private $artistDao;
<<<<<<< HEAD
	private $session;
<<<<<<< HEAD

    public function __construct()
    {
    	$this->session = Session::getInstance();
    	$this->artistDao = ArtistDAO::getInstance(); // te devuelve la instancia de la bbdd de artista
    }
/*
    public function center($method) {
        switch($method) {
            case "save": $this->viewController->saveArtist()
        }
    } */
    public function save($name)
    {

    	$nuevoArtist = new Artist($name);
    	$mensaje['mensaje'] = "EL ARTISTA SE AGREGO CON EXITO !!";
    	$mensaje['tipo'] = "success";
    	try{
    		$this->artistDao->create($nuevoArtist);


	    }catch(\PDOException $e){
            $mensaje['mensaje'] = "UPS! ERROR PDO: " . $e->getMessage() . "| CODE: " . $e->getCode();
	    	$mensaje['tipo'] = "danger";


	    }catch(\Exception $e){    	
            $mensaje['mensaje'] = "UPS! ERROR EXCEPTION: " . $e->getMessage() . "| CODE: " . $e->getCode();
	    	$mensaje['tipo'] = "danger";
	    }

    	include URL_VIEW . 'header.php';
      	require(URL_VIEW . "viewArtist/artistCreate.php");
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
=======
	private $viewController;
=======
>>>>>>> 03de3388d37319ece6819a8db69389fb955fc6b9

	public function __construct()
	{
		parent::__construct();
		$this->artistDao = ArtistDAO::getInstance(); // te devuelve la instancia de la bbdd de artista
	}

	public function save($name)
	{

		$nuevoArtist = new Artist($name);
		$mensaje[0] = "El artista se ha agregado exitosamente :D ";
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
		require(URL_VIEW . "viewArtist/artistCreate.php");
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
>>>>>>> 17a4373c224feb3e215537f8efd4dc977e669080

    public function delete($id)
    {
        $searchedArtist = $this->artistDao->delete($id);
        $this->list(); // reutilizo el list()
    }


    public function update($nombre,$id_artist)
    {    	
    	$artist = new Artist($nombre);
    	$artist->setIdArtist($id_artist);
    	
    	// se muestra que se modifico correctamente el artista
    		$mensaje['mensaje'] = "EL ARTISTA SE MODIFICO CON EXITO !";
    		$mensaje['tipo'] = "success";

    	try
    	{
    		$this->artistDao->update($artist);    		
    	}
    	catch(\PDOException $e)
    	{
    		$mensaje['mensaje'] = "UPS! ERROR PDO: " . $e->getMessage() . "| CODE: " . $e->getCode();
	    	$mensaje['tipo'] = "danger";
    	}
    	catch(\Exception $e){
	    	$mensaje['mensaje'] = "UPS! ERROR EXCEPTION: " . $e->getMessage() . "| CODE: " . $e->getCode();
	    	$mensaje['tipo'] = "danger";
	    }
    	

    	

		$searchedArtist = $this->artistDao->read($id_artist); // artista buscado


		include URL_VIEW . 'header.php';
	    require(URL_VIEW . "viewArtist/updateArtist.php");
	    include URL_VIEW . 'footer.php';    	

    }

    public function updateView($id) 
    {
    	$searchedArtist = $this->artistDao->read($id); // artista buscado


    	include URL_VIEW . 'header.php';
	    require(URL_VIEW . "viewArtist/updateArtist.php");
	    include URL_VIEW . 'footer.php';
    }



}
