<?php
<<<<<<< HEAD:controller/artistController.php
//sdas
=======

>>>>>>> 8bd9a2edee8dfc9df218e57cbb4bbf4109f2b985:controller/artistController.php
namespace controller;

use Model\Artist;

class ArtistController{

	private $artistDAO;

    public function __construct()
    {
    	$this->artistDAO = ArtistBDDAO::getInstance(); // te devuelve la instancia de la bbdd de artista
    }

    public function save($name)
    {
    	$nuevoArtist = new Artist($name);


    }




}
