<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset-UTF-8");
header("Access_Controll-Allow_Methods: POST");

include_once "../config/db.php";
include_once "orders.php";

$database = new Database();
$db = $database->getConnection();

$ORDERS = new Builder($db);

$surname = $_POST["surname"];
$date_order = $_POST["date_order"];
$id_products = $_POST["id_products"];

if (!empty($surname) && !empty($date_order) && !empty($id_products)) {
	$ORDERS->SURNAME = $surname;
	$ORDERS->DATE = $date_order;
	$ORDERS->ID_PRODUCTS = $id_products;
	
	if ($ORDERS->create()) {
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