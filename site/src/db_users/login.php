<?php
// заголовки 
header("Access-Control-Allow-Origin: http://authentication-jwt/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db.php';
include_once 'user.php';

include_once '../config/core.php';
include_once '../libs/php-jwt-master/src/BeforeValidException.php';
include_once '../libs/php-jwt-master/src/ExpiredException.php';
include_once '../libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;


// получаем соединение с базой данных 
$database = new Database();
$db = $database->getConnection();
 
// создание объекта 'User' 
$user = new User($db);
 
// получаем данные 
$data = json_decode(file_get_contents("php://input"));
 
// устанавливаем значения 
$user->email = $data->email;
$email_exists = $user->emailExists();

// Проверка на сощуствование email и совпадает ли пароль в бд
if ( $email_exists && password_verify($data->password, $user->password) ) {
 
    $token = array(
       "iss" => $iss,
       "aud" => $aud,
       "iat" => $iat,
       "nbf" => $nbf,
       "data" => array(
           "id" => $user->id,
           "firstname" => $user->firstname,
           "lastname" => $user->lastname,
           "email" => $user->email
       )
    );
 
    // код ответа 
    http_response_code(200);
 
    // создание jwt 
    $jwt = JWT::encode($token, $key);
    echo json_encode(
        array(
            "message" => "Успешный вход в систему.",
            "jwt" => $jwt
        )
    );
 
}
 
// Если электронная почта не существует или пароль не совпадает, 
// сообщим пользователю, что он не может войти в систему 
else {
 
  // код ответа 
  http_response_code(401);

  // сказать пользователю что войти не удалось 
  echo json_encode(array("message" => "Ошибка входа."));
}
?>