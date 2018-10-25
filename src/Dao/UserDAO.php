<?php namespace dao;

	use Dao\Connection as Connection;
	use Model\User as User;

	class UserDAO {
		protected $table = "users"; /* se agregar para el dia de mañana modificar una vez el nombre de la tabla */
		private $objInstances = []; //aca van los objetos instanciados desde la base de datos
		private static $instance;

			public function __construct(){

			}

			public static function getInstance()
	    	{
				if (!self::$instance instanceof self) {
					self::$instance = new self();
				}
				return self::$instance;
	    	}

			public function addUser(User $user) {

				try {
					$sql = ("INSERT INTO $this->table (username, pass, email, role_user)
					VALUES (:username, :pass, :email, :role_user)");

					$pdo = new Connection();
					$connection = $pdo->connect(); //devuelve un obj PDO
					$statement = $connection->prepare($sql);

					$username = $user->getNickname();
					$pass = $user->getPassword();
					$email = $user->getEmail();
					$role = "user";

					$statement->bindParam(':username', $username);
					$statement->bindParam(':pass', $pass);
					$statement->bindParam(':email', $email);
					$statement->bindParam(':role_user', $role);

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
			
			public function fetchAllUsers(){

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

			public function verifyNickname ($nickname) {
				try{
	        $sql = "SELECT * FROM $this->table WHERE username = \"$nickname\" LIMIT 1";
					$pdo = new Connection();
					$connection = $pdo->connect();
	        $statement = $connection->prepare($sql);
	        $statement->execute();
	        $dataSet = $statement->fetch(\PDO::FETCH_ASSOC);

	        if ( ! empty($dataSet)){
	            return TRUE;
	        }

	        return FALSE;
	      }catch(\PDOException $e){
	        echo $e->getMessage();
	      }
			}//method end

			public function verifyEmail($email){
	        $sql = "SELECT * FROM $this->table WHERE email = \"$email\" LIMIT 1";
					$pdo = new Connection();
					$connection = $pdo->connect();
	        $statement = $connection->prepare($sql);
	        $statement->execute();
	        $dataSet = $statement->fetch(\PDO::FETCH_ASSOC);

	        if ( ! empty($dataSet))
	        {
	            return TRUE;
	        }

	        return FALSE;
	    }//method end

    }//class end
?>
