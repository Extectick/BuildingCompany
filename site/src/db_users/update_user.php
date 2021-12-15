<?

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/core.php';
include_once '../libs/php-jwt-master/src/BeforeValidException.php';
include_once '../libs/php-jwt-master/src/ExpiredException.php';
include_once '../libs/php-jwt-master/src/SignatureInvalidException.php';
include_once '../libs/php-jwt-master/src/JWT.php';

include_once '../config/db.php';
include_once 'user.php';

$database = new Database();
$db = $database->getConnection();
 
// Создание объекта 'User' 
$user = new User($db);
 
// Получаем данные 
$data = json_decode(file_get_contents("php://input"));

$jwt=isset($data->jwt) ? $data->jwt : "";

if($jwt) {

	try {

		$decoded = JWT::decode($jwt, $key, array('HS256'));

		$user->fisrtname = $data->firsname;
		$user->lastname = $data->lastname;
		$user->email = $data->email;
		$user->password = $data->password;
		$user->id = $data->id;

		// Создание пользователя
		if($user->update()) {
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
			$jwt = JWT::encode($token, $key);

			http_response_code(200);

			// Код ответа в JSON
			echo json_encode(
				array(
					"message" => "Пользователь был обновлен"
					"jwt" => $jwt


				)
			);

		} 
		else {
			http_response_code(401);

			echo json_encode(array("message" => "Невозможно обновить пользователя"));
		}
	}

	catch (Exception $e) {
		http_response_code(401);

		echo json_encode(array(
			"message" => "Доступ закрыт",
			"error" => $e->getMessage();
		));
	}
}
else {
	http_response_code(401);

	echo json_encode(array("message" => "Доступ закрыт"));
}
?>