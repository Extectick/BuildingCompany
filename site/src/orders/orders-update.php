<?
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset-UTF-8");
header("Access-Controll-Allow-Methods: PUT");

include_once "../config/db.php";
include_once "orders.php";

$database = new Database();
$db = $database->getConnection();

$ORDERS = new Builder($db);

$data = json_decode(file_get_contents("php://input"));

//Устанавить id
$ORDERS->id = $data->id;

//Устанавить значения свойств
$ORDERS->surname = $data->surname;
$ORDERS->date_order = $data->date_order;
$ORDERS->id_products = $data->id_products;

if ($ORDERS->update()) {
	http_response_code(200);
	echo json_encode(array("message" => "Запись была изменена"), JSON_UNESCAPED_UNICODE);
}
else {
	http_response_code(503);
	echo json_encode(array("message" => "Невозможно обновить запись"), JSON_UNESCAPED_UNICODE);
}
?>