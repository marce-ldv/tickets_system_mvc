<?php

namespace Controller;

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