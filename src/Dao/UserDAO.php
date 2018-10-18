<?php namespace dao;

	use DAO\Connection as Connection;
	use Model\User as User;

	class UserDAO
	{
		private $table = "users"; /* se agregar para el dia de mañana modificar una vez el nombre de la tabla */
		private $listado = []; //aca van los objetos instanciados desde la base de datos
		protected $table = 'users';

		public function addUser(User $user){
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
		}
				
	}
?>