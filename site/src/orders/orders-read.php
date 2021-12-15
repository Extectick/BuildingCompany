<?
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset-UTF-8");

include_once "../config/db.php";
include_once "orders.php";

$database = new Database();

$db = $database->getConnection();

$ORDERS = new Builder($db);

$stmt =$ORDERS->read();
$num = $stmt->rowCount();

if ($num > 0) {
	$Builder_arr = array();
	$Builder_arr['records'] = array();
	
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		$Builder_item = array(
			"ID" => $ID,
			"SURNAME" => $SURNAME,
			"DATE" => $DATE,
			"ID_PRODUCTS" => $ID_PRODUCTS
		);
		
		array_push($Builder_arr['records'], $Builder_item);
	}
	
	http_response_code(200);
	
	echo json_encode($Builder_arr);
}
else {
	http_response_code(404);
	
	echo json_encode(array("message" => "Записи не найдены"), JSON_UNESCAPED_UNICODE);
}

?>