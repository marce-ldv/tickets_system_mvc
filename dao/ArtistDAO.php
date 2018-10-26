<?php

namespace dao;

use model\Artist as Artist;
use Interface\ICrud as ICrud;

class ArtistDAO extends SingletonDAO implements ICrud
{
	private $table = "artists";
	private $list = array();
	private static $instance;
	private $pdo;

	public function __construct()
	{
		$this->pdo = new Connection();
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


	public function create($value)
	{
		try
		{
			$sql = "INSERT INTO $this->table (name) VALUES (:name)";

			$connection = $this->pdo->connect(); // probar si funciona $connection = Connection::connect();
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

	/*TODO: PROBAR READ Y READALL EN LA CONTROLADORA*/

	public function read($id)
	{
		try {

			$sql = "SELECT * FROM $this->table WHERE artists_id = $id";

			$pdo = new Connection(); // <- en vez de esta y
			$connection = $pdo->connect(); // esta linea se puede poner $connection = Connection::connect();
			$statement = $connection->prepare($sql);

			$statement->execute();

			$dataSet[] = $statement->fetch(\PDO::FETCH_ASSOC);

			if($dataSet[0])  // como siempre va a traer un solo objeto pongo dataSet[0] ya que estoy 
			{
				$this->mapMethod($dataSet);
			}

			if(!empty($this->list[0]))
			{
				return $this->list[0];
			}

			return false;
			
		}
		catch (\PDOException $e) 
		{
			echo $e->getMessage();
			die();			
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
			die();
		}

	}


    public function readAll()
    {
    	try
    	{
    		$sql = "SELECT * FROM $this->table";

    		$connection = Connection::connect();
    		$statement = $connection->prepare($sql);

    		$statement->execute();

			$dataSet = $statement->fetchAll(\PDO::FETCH_ASSOC);

			$this->mapMethod($dataSet); 

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

    public function update($value)
    {
    	try
    	{
    		$sql = "UPDATE this->table SET name = :name WHERE id_artist = :id ";

			$connection = Connection::connect();
    		$statement = $connection->prepare($sql);

    		$name = $value->getNameArtist();
    		$id = $value->getIdArtist();

    		$statement->bindParam(":name",$name);
    		$statement->binParam(":id",$id);

    		$statement->execute();
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

	public function delete($id)
	{
		try
		{
			$sql = "DELETE FROM $this->table WHERE id_artist = $id "; // si es un string poner \" $id \";

			$connection = Connection::connect();
			$statement = $connection->prepare($sql);



			$statement->execute;
		}
	}

	public function mapMethod($dataSet)
	{
		$dataSet = is_array($dataSet) ? $dataSet : false;

		if($dataSet)
		{
			$this->listado = array_map(function ($p)
			{
				$u = new Usuario($p['name']);
				$u->setIdArtist($p['id_artist']);

				return $u;
			
			}, $dataSet); // cierre del array_map
		}
	}

}












