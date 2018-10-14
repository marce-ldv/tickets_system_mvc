<?php namespace dao;

	use DAO\Connection as Connection;
	use Model\User as User;

	class UserDAO extends Connection
	{
		//protected $table = 'users';

		public function addUser(User $user){
			$query = 'INSERT INTO users (username, pass, name_user, email, role_user) 
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
		}

		/*En el if compruebo si user tiene datos, en caso que los contenga hago una validacion
		de password, no necesito validar tambien el username ya que es el que viene en la variable user */
		public function login($username, $password) {
			$user = $this->userDao->read($user);

			if($user){
				if($user->getPassword == $password){
					//logueaste
				}
			}
		}
				
	}
?>