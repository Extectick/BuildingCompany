<?php
class Builder {
	private $conn;
	private $table_name = "ORDERS";
	
	public $ID;
	public $SURNAME;
	public $DATE;
	public $ID_PRODUCTS;
	
	public function __construct($db) {
		$this->conn = $db;
	}
	
	function read() {
		$query = "SELECT `ID`,`SURNAME`,`DATE`,`ID_PRODUCTS` FROM ".$this->table_name;
		
		$stmt = $this->conn->prepare($query);
		
		$stmt->execute();
		
		return $stmt;
		
	}
	
	function create() {
		$query = "INSERT INTO ".$this->table_name." (`SURNAME`,`DATE`,`ID_PRODUCTS`) VALUES (:surname, :date_order, :id_products)";
		
		$stmt = $this->conn->prepare($query);
		
		//oчистка
		$this->surname = htmlspecialchars(strip_tags($this->SURNAME));
		$this->date_order = htmlspecialchars(strip_tags($this->DATE));
		$this->id_products = htmlspecialchars(strip_tags($this->ID_PRODUCTS));
		
		//Привязка значений
		$stmt->bindParam(":surname", $this->SURNAME);
		$stmt->bindParam(":date_order", $this->DATE);
		$stmt->bindParam(":id_products", $this->ID_PRODUCTS);
		
		if ($stmt->execute()) {
			return true;
		}
		return false;
	}
	
	function update() {
		$query = "UPDATE ".$this->table_name." SET `SURNAME`=:surname, `DATE`=:date_order, `ID_PRODUCTS`=:id_products WHERE ID = :id";
		$stmt = $this->conn->prepare($query);
		
		//oчистка
		$this->surname = htmlspecialchars(strip_tags($this->SURNAME));
		$this->date_order = htmlspecialchars(strip_tags($this->DATE));
		$this->id_products = htmlspecialchars(strip_tags($this->ID_PRODUCTS));
		
		//Привязка значений
		$stmt->bindParam(":id", $this->id);
		$stmt->bindParam(":surname", $this->surname);
		$stmt->bindParam(":date_order", $this->date_order);
		$stmt->bindParam(":id_products", $this->id_products);
		
		//Запрос
		if ($stmt->execute()) {
			return true;
		}
		
		return false;
	}

}
?>