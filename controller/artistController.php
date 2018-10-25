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
    }




}
