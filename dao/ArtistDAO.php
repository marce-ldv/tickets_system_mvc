<?php

namespace Dao;

use Model\Artist as Artist;

class ArtistDAO extends SingletonDAO
{
	private $table = "artists";
	private $list = array();
	private static $instance;


	public function __construct(){

	}

	// no lo necesito porque esta el singletonDAO
	/*public function getInstance() 
	{
		if(!self::$instance instanceof self)
		{
			self::$instance = new self();
		}		
		return self::$instance;
	}*/


	public function addArtist(Artist $artist)
	{
		try
		{
			$sql = "INSERT INTO $this->table (name) VALUES (:name)";

			$pdo = new Connection(); 
			$connection = Connection::connect(); // probar si funciona
			$statement = $connection->prepare($sql);

			$name = $object->getNameArtist();
			
			$statement->bindParam(":name" , $name);

			$statement->execute();

			return $connection->lastInsertId();			
		}
		catch(\PDOException $e)
		{
			echo $e->getMessage();
			die();
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
			die();
		}
	}

    public function fetchAllArtist()
    {
    	try
    	{
    		$sql = "SELECT * FROM $this->table";

    		$pdo = new Connection();
    		$connection = Connection::connect();
    		$statement = $connection->prepare($sql);

    		$statement->execute();

			$dataSet = $statement->fetchAll(\PDO::FETCH_ASSOC);

			$this->mapMethod($dataSet); // realizar metodo

			if(!empty($this->objInstances))
			{
				return $this->objInstances;
			}

			return null;
    	}
    	catch(\PDOException $e)
    	{
    		echo $e->getMessage();
    		die();
    	}
    	catch(Exception $e)
    	{
    		echo $e->getMessage();
    		die();
    	}
    }
}

