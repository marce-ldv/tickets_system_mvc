<?php
namespace model;

class Artist
{
	private $id_artist;
	private $name;

    public function __construct($idArtistRecib, $nameRecib){
    	$this->id_artist = $idArtistRecib;
    	$this->name = $nameRecib;
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

    public function setIdArtist($idArtistRecib)
    {
    	$this->id_artist = $idArtistRecib;
    }

    public function setNameArtist($nameRecib)
    {
    	$this->name = $nameRecib;
    }

}



 ?>
