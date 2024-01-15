<?php
require_once __DIR__ . '/../UtilController/Utils.php';

class LoginSignup{
	private $conn_id;
	private $table_name;
	private $utils;

	public function __construct(object $conn_id, string $table_name){
		$this->conn_id = $conn_id;
		$this->table_name = $table_name;
	}

	public function createUser(string $username, string $password){

	}

	public function loginUser(string $username, string $password){
		$this->utils = new Utils();
		$user_info = null;

		$column_filter = [
			"username" => $username,
			"password" => $password
		];

		$is_exist = $this->isUserExist($column_filter);
		$username_exist = $this->isUserExist(["username"=>$username]);

		$msg = null;
		$current_login = false;

		if($is_exist){
			$current_login = $this->isCurrentLogin($column_filter);

			$update_params = [
				"is_login" => 1,
				"ssid" => $this->utils->generateSessionID(),
				"actdate" => date("Y-m-d")
			];

			$this->utils->updateRecord($this->conn_id, $this->table_name, $update_params, $column_filter);

			$selected_column = [
				"username",
				"fullname",
				"ssid",
				"role"
			];
			
			$user_info = $this->utils->fetchRecord($this->conn_id, $this->table_name, $selected_column, $column_filter);
		}
		else{
			$msg = "Please check your credentials.";
			
			if(!$username_exist){
				$msg .= "<br />Username <b>$username</b> was not exist.";
			}
			
		}

		return compact("is_exist", "current_login", "msg", "user_info");
	}

	public function updateUserfile(array $details){
		if(empty($details)){
			return false;
		}

		$sesionID = Utils::generateSessionID();
	}

	private function isUserExist(array $user_details, bool $debug = false){
		if(empty($user_details)){
			return false;
		};

		$filter_str = "";
		$params = [];

		foreach($user_details as $column_name => $value){
			$filter_str .= " AND " . $column_name ." = ? ";
			$params[] = $value;
		}

		$str = "SELECT id FROM $this->table_name WHERE " . ltrim($filter_str, " AND");
		try{
			$stmt = $this->conn_id->prepare($str);
			$stmt->execute($params);

			if($debug){
				die(
					var_dump(
						$stmt->debugDumpParams(),
						$stmt->errorInfo()[2]
					)
				);
			}

			return $stmt->rowCount() > 0;
		}catch(PDOException $e){
			if($debug){
				echo "Error: ". $e->getMessage();
			}
			return null;
		}
	}

	private function isCurrentLogin(array $user_details, bool $debug = false){
		if(empty($user_details)){
			return false;
		};

		$filter_str = "";
		$params = [];

		foreach($user_details as $column_name => $value){
			$filter_str .= " AND " . $column_name ." = ? ";
			$params[] = $value;
		}

		$qry = "SELECT is_login FROM $this->table_name WHERE " . ltrim($filter_str, " AND");
		try{
			$stmt = $this->conn_id->prepare($qry);
			$stmt->execute($params);
			
			$rs = $stmt->fetch(PDO::FETCH_ASSOC);
			if($debug){
				die(
					var_dump(
						$stmt->debugDumpParams(),
						$stmt->errorInfo()[2]
					)
				);
			}

			return (bool) intval($rs['is_login']);
		}catch(PDOException $e){
			if($debug){
				echo "Error: ". $e->getMessage();
			}
			return null;
		}

	}

	public function getConnectionId(){
		return $this->conn_id;
	}

	public function __destruct()
	{
		$this->conn_id = null;
	}


}
?>