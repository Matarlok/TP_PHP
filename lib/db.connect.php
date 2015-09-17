<?php

	class DBConnect {

		public function __construct() {

			try {
				$this -> connector = new PDO('mysql:host=' . DBSERVER . ';charset=utf8;dbname=' . DBNAME , DBUSER , DBPW);

			} catch(exception $e) {
				die('ERROR: ' . $e -> getMessage());
			}
		}


		public function checkLogin($username, $password) {

			$password = sha1($password);
			$query = "SELECT * FROM " . USERTABLE . " WHERE username = :username AND password = :password";
			$this -> value =  $this -> connector -> prepare($query);
			$this -> value -> bindParam(":username" , $username);
			$this -> value -> bindParam(":password" , $password);
			$this -> value -> execute();
			$this -> value =  $this -> value -> fetch(PDO::FETCH_ASSOC);

			return $this -> value;
		}


		public function insertUser($params) {
			$params["creation_date"] = date("Y-m-d H:i:s");

			$query = "INSERT INTO " . USERTABLE . " (";
			foreach($params as $key => $value){
				if (   $key != "submitbt"
					&& $key != "confirm_password"
					){
					$query .= $key . ",";
				}
			}

			$query  = substr($query, 0, -1);
			$query .= ") VALUES (";
			foreach($params as $key => $value) {
				if (   $key != "submitbt"
					&& $key != "confirm_password"
					){
					$query .= ":" . $key . ",";
				}
			}

			$query  = substr($query, 0, -1);
			$query .= ")";

			$this -> value =  $this->connector -> prepare($query);

			$this -> value -> bindParam(":username"      , $params["username"]      );
			$this -> value -> bindParam(":first_name"    , $params["first_name"]    );
			$this -> value -> bindParam(":last_name"     , $params["last_name"]     );
			$this -> value -> bindParam(":email"         , $params["email"]         );
			$this -> value -> bindParam(":password"  ,sha1($params["password"])     );
			$this -> value -> bindParam(":optin"         , $params["optin"]         );
			$this -> value -> bindParam(":creation_date" , $params["creation_date"] );
			$this -> value -> execute();

			if ($this -> value -> rowCount() == 0) {
				return false;

			}else{
				return $this -> connector -> lastInsertId();
			}
		}


		public function updateUser($params) {

			if ($params["newPassword"] == "") {
				$query = "UPDATE " . USERTABLE . "SET username   = :username,
													  first_name = :first_name,
													  last_name  = :last_name,
													  admin      = :admin,
													  actif      = :actif
													  WHERE id   = :id"
				;

			}else{
				$query = "UPDATE " . USERTABLE . "SET username   = :username,
													  first_name = :first_name,
													  last_name  = :last_name,
													  password   = :password,
													  admin      = :admin,
													  actif      = :actif
													  WHERE id   = :id"
				;
			}

			$this -> value = $this -> connector -> prepare($query);
			$this -> value -> bindParam(":username"   , $params["username"]   );
			$this -> value -> bindParam(":first_name" , $params["first_name"] );
			$this -> value -> bindParam(":last_name"  , $params["last_name"]  );
			$this -> value -> bindParam(":admin"      , $params["admin"]      );
			$this -> value -> bindParam(":actif"      , $params["actif"]      );

			if($params["newPassword"] != "") {
				$this -> value -> bindParam (":password" , sha1($params["newPassword"]));
			}

			$this  -> value -> bindParam(":id", $params["userId"]);
			$result = $this -> value -> execute();

			return $result;
		}


		public function deleteUser($userId) {

			$actif = 0;
			$query = "UPDATE " . USERTABLE . " SET actif    = :actif
												   WHERE id = :id"
			;

			$this-> value = $this -> connector -> prepare($query);
			$this-> value   -> bindParam(":actif", $actif);
			$this-> value   -> bindParam(":id", $userId);
			$result = $this -> value -> execute();

			return $result;
		}


		public function getUsers() {

			$query = "SELECT * FROM " . USERTABLE;
			$this -> value =  $this -> connector -> prepare($query);
			$this -> value -> execute();
			$this -> value =  $this -> value -> fetchAll(PDO::FETCH_ASSOC);

			return $this -> value;
		}


		public function getUserById($id) {

			$query = "SELECT * FROM " . USERTABLE . " WHERE id = :id";
			$this -> value =  $this -> connector -> prepare($query);
			$this -> value -> bindParam(":id", $id);
			$this -> value -> execute();
			$this -> value =  $this -> value -> fetch(PDO::FETCH_ASSOC);

			return $this -> value;
		}
	}
?>