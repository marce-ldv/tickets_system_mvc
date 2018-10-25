<?php

namespace controller;

use model\Artist;

class ArtistController{

	private $artistDao;

    public function __construct()
    {
    	$this->artistDAO = ArtistDAO::getInstance(); // te devuelve la instancia de la bbdd de artista
    }

    public function save($name)
    {
    	$nuevoArtist = new Artist($name);
<<<<<<< HEAD:src/Controller/ArtistController.php
=======


>>>>>>> 550486704a332a16dd6bc0be6e4a0b62fd954094:controller/artistController.php
    }




}
