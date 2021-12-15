<?php
header("Access-Control-Allow-Origin: http://http://217.71.129.139:4496/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db.php';
include_once 'products.php';

$database = new Database();
$db = $database->getConnection();

$products = new Products($db);

// Отправляемые данные для JSON
$data = json_decode(file_get_contents("php://input"));

$products->id = $data->id;

if (
      !empty($products->id) &&
      $products->delete() // Удаление товара
  ) {
    // Код ответа 
      http_response_code(200);
      // Ответ что товар был создан 
      echo json_encode(array("message" => "Товар был удалён."));

  }
  else {
    // Код ответа
      http_response_code(400);
      
      // Ответ что создать товар не удалось 
      echo json_encode(array("message" => "Невозможно удалить товар."));
  }
// }



?>