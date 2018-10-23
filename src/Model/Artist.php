<?php
namespace Model;

class Artist
{
	private $id_artist;
	private $name;
	private $surname;
	private $nick_name;

    public function __construct($idArtistRecib, $nameRecib, $surnameRecib, $nickNameRecib)
    {
    	$this->id_artist = $idArtistRecib;
    	$this->name = $nameRecib;
    	$this->surname = $surnameRecib; 
    	$this->nick_name = $nickNameRecib;
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

    public function getSurnameArtist()
    {
    	return $this->surname;    	
    }

    public function getNickNameArtist()
    {
    	return $this->nick_name;    	
    }

    //setters

    public function setIdArtist($idArtistRecib)
    {
    	$this->id_artist = $idArtistRecib;
    }

    public function setNameArtist($nameRecib)
    {
    	$this->name = $nameRecib;
    }

    public function setSurnameArtist($surnameRecib)
    {
    	$this->surname = $surnameRecib;
    }

    public function setNickNameArtist($nickNameRecib)
    {
    	$this->nick_name = $nickNameRecib;
    }


}



 ?>