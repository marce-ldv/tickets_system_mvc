<?php namespace dao;

	use Dao\Connection as Connection;
	use Dao\SingletonDAO as Singleton;
	use Model\User as User;
	use Interfaces\ICrud as ICrud;

	class UserDAO extends Singleton implements ICrud{
		protected $table = "users"; /* se agregar para el dia de mañana modificar una vez el nombre de la tabla */
		private $objInstances = []; //aca van los objetos instanciados desde la base de datos
		private static $instance;
		private $pdo;

			public function __construct(){
				$this->pdo = new Connection();
			}
/*
			public static function getInstance()
	    	{
				if (!self::$instance instanceof self) {
					self::$instance = new self();
				}
				return self::$instance;
	    	}
*/
			public function create($user) {

				try {
					$sql = ("INSERT INTO $this->table (username, pass, email)
					VALUES (:username, :pass, :email)");

					$connection = $this->pdo->connect();
					$statement = $connection->prepare($sql);

					$username = $user->getUsername();
					$pass = $user->getPassword();
					$email = $user->getEmail();
					$role = "user";

					$statement->bindParam(':username', $username);
					$statement->bindParam(':pass', $pass);
					$statement->bindParam(':email', $email);

					$statement->execute();

					return $connection->lastInsertId();
				}catch(\PDOException $e){
					echo $e->getMessage();
					die();
				}catch(Exception $e){
					echo $e->getMessage();
					die();
				}
			}
<<<<<<< HEAD:src/Dao/UserDAO.php
			
			public function fetchAllUsers(){
=======

			public function read($id){

			}

			public function readAll(){
>>>>>>> 550486704a332a16dd6bc0be6e4a0b62fd954094:dao/userDAO.php

				try{
			        $query = "SELECT * FROM $this->tabla";

							$pdo = new Connection();
							$connection = $pdo->connect();
			        $statement = $connection->prepare($query);

			        $statement->execute();

			        $dataSet = $statement->fetchAll(\PDO::FETCH_ASSOC);

			        $this->mapMethod($dataSet);

			        if (!empty($this->objInstances)) {
			            return $this->objInstances;
			        }

			        return null;
			    }catch(\PDOException $e){
					echo $e->getMessage();
					die();
				}catch(Exception $e){
					echo $e->getMessage();
					die();
				}
			}//end fetch method

			public function update($value){
				// code...
			}

			public function delete($id){
				// code...
			}

			public function readByUser($username){
				try{
	        $sql = "SELECT * FROM $this->table WHERE username = :userParam OR email = :userParam";
					$connection = $this->pdo->connect();
	        $statement = $connection->prepare($sql);
					$statement->bindParam(':userParam', $username);
	        $statement->execute();

	        if ($statement->fetch()){

	            return TRUE;
	        }
	        return FALSE;
	      }catch(\PDOException $e){
	        echo $e->getMessage();
	      }
			}

			public function mapMethod($dataSet){

		        $dataSet = is_array($dataSet) ? $dataSet : false;

		        if($dataSet){
		            $this->listado = array_map(function ($p) {
		                $u = new Usuario(
		                    $p['username'],
		                    $p['pass'],
		                    $p['email']);
		                $u->setId($p['id_usuario']);
		                return $u;
		            }, $dataSet);
		        }
		    }//mapMethod end



    }//class end
?>
