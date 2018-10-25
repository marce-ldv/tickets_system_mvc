<?php

namespace Controller;

use Model\Artist;

class ArtistController{

	private $artistDao;

    public function __construct()
    {
    	$this->artistDAO = ArtistDAO::getInstance(); // te devuelve la instancia de la bbdd de artista
    }

    public function save($name)
    {
    	$nuevoArtist = new Artist($name);
    }




}