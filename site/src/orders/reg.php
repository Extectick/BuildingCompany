<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset-UTF-8");
header("Access_Controll-Allow_Methods: POST");

include_once "../config/db.php";

class Builder {
	private $conn;
	private $table_name = "USERS";
	
	public $email;
	public $pass;
	public $name;
	
	public function __construct($db) {
		$this->conn = $db;
	}

function create() {
		$query = "INSERT INTO ".$this->table_name." (`email`,`name`,`password`) VALUES (:email, :name, :pass)";
		
		$stmt = $this->conn->prepare($query);
		
		//oчистка
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->pass = htmlspecialchars(strip_tags($this->password));
		
		//Привязка значений
		$stmt->bindParam(":email", $this->email);
		$stmt->bindParam(":name", $this->name);
		$stmt->bindParam(":pass", $this->password);
		
		if ($stmt->execute()) {
			return true;
		}
		return false;
	}



$database = new Database();
$db = $database->getConnection();

$USERS = new Builder($db);

$email = $_POST["email"];
$pass = $_POST["pass"];
$name = $_POST["name"];

if (!empty($email) && !empty($pass) && !empty($name)) {
	$USERS->email = $email;
	$USERS->password = $pass;
	$USERS->name = $name;
	
	if ($USERS->create()) {
		http_response_code(201);
		
		echo json_encode(array("message" => "Запись была создана"), JSON_UNESCAPED_UNICODE);
	}
	else {
		http_response_code(503);
		
		echo json_encode(array("message" => "Невозможно создать запись"), JSON_UNESCAPED_UNICODE);
	}
}
else {
	http_response_code(400);
	echo json_encode(array("message" => "Невозможно создать запись. Данные не полные"), JSON_UNESCAPED_UNICODE);
}

?>