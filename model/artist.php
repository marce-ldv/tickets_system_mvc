<?php
namespace model;

class Artist
{
	private $id_artist;
	private $name;

    public function __construct($idArtistRecib, $nameRecib)
    {
    	$this->id_artist = $idArtistRecib;
    	$this->name = $nameRecib;
<<<<<<< HEAD:src/Model/Artist.php
=======
    	$this->surname = $surnameRecib;
    	$this->nick_name = $nickNameRecib;
>>>>>>> 550486704a332a16dd6bc0be6e4a0b62fd954094:model/artist.php
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

<<<<<<< HEAD:src/Model/Artist.php
=======
    public function getSurnameArtist()
    {
    	return $this->surname;
    }

    public function getNickNameArtist()
    {
    	return $this->nick_name;
    }

>>>>>>> 550486704a332a16dd6bc0be6e4a0b62fd954094:model/artist.php
    //setters

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
