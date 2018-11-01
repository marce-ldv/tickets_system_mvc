<?php
namespace model;

class Artist
{
	private $id_artist;
	private $name;

    public function __construct($nameReceived){
    	$this->name = $nameReceived;
    }

    //getters

    public function getIdArtist()
    {
    	return $this->id_artist;
    }

    public function getNameArtist()
    {
    	return $this->name;
    }

    //setters

    public function setIdArtist($idArtistReceived)
    {
    	$this->id_artist = $idArtistReceived;
    }

    public function setNameArtist($nameReceived)
    {
    	$this->name = $nameReceived;
    }

}



 ?>
