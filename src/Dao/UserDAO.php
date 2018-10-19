<?php namespace dao;

	use DAO\Connection as Connection;
	use Model\User as User;

	class UserDAO
	{
		private $table = "users"; /* se agregar para el dia de mañana modificar una vez el nombre de la tabla */
		private $objInstances = []; //aca van los objetos instanciados desde la base de datos
		protected $table = 'users';

		public function addUser(User $user){

			try{
				$query = 'INSERT INTO $this->table (username, pass, name_user, email, role_user)  -- deberia funcionar
				VALUES (:username, :pass, :name_user, :email, :role_user)';

				$pdo = new Connection();
				$connection = $pdo->connect(); //devuelve un obj PDO
				$statement = $connection->prepare($query);

				$username = $user->getUsername();
				$password = $user->getPassword();
				$name = $user->getName();
				$email = $user->getEmail();
				$role = $user->getRole();
				
				$statement->bindParam(':username', $username);
				$statement->bindParam(':password', $password);
				$statement->bindParam(':name', $name);
				$statement->bindParam(':email', $email);
				$statement->bindParam(':role', $role);
				
				$statement->execute();

				return $connection->lastInsertId();
			}catch(/PDOException $e){
				echo $e->getMessage();
				die();
			}catch(Exception $e){
				echo $e->getMessage();
				die();
			}
		}

		public function fetchAllUsers(){

			try{
		        $query = "SELECT * FROM $this->tabla";

		        $connection = Connection::connect();

		        $statement = $connection->prepare($query);

		        $statement->execute();

		        $dataSet = $statement->fetchAll(\PDO::FETCH_ASSOC);

		        $this->mapMethod($dataSet);

		        if (!empty($this->objInstances)) {
		            return $this->objInstances;
		        }

		        return null;
		    }catch(/PDOException $e){
				echo $e->getMessage();
				die();
			}catch(Exception $e){
				echo $e->getMessage();
				die();
			}	
		}//end fetch method

		public function mapMethod($dataSet){

	        $dataSet = is_array($dataSet) ? $dataSet : false;

	        if($dataSet){
	            $this->listado = array_map(function ($p) {
	                $u = new Usuario(
	                    $p['username'],
	                    $p['password'],
	                    $p['email']);
	                $u->setId($p['id_usuario']);
	                return $u;
	            }, $dataSet);
	        }
	    }//mapMethod end

    }//class end
?>