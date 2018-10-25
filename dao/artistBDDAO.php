<?php

namespace dao;

/**
 * summary
 */
class ArtistBDDAO extends SingletonDAO{
	private $list = array();
	private $table = "artists";

	public function save($object){
		$sql = "INSERT INTO $this->table (name) value (:name)";

		$connection = Connection::connect();

		$sentence = $connection->prepare($sql);

		$name = $object->getName();

		$sentene->bindParam(":name" , $name);
	}


}
