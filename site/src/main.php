<?php 

$db_host='db:3306'; // ваш хост
$db_name='Builder'; // ваша бд
$db_user='root'; // пользователь бд
$db_pass='123'; // пароль к бд

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд

$mysqli->set_charset("utf8mb4"); // задаем кодировку

$result = $mysqli->query('SELECT * FROM `products`'); // запрос на выборку

while($row = $result->fetch_assoc()) {
    echo '
          <div class="product-wrapper-main">
              <div class="product-wrapper">
                  <div class="product-image">
                    <a href=""><img src="'.$row['img'].'"></a>
                    <div class="shadow"></div>
                    <div class="actions">
                      <div class="actions-btn">
                        <div class="add-to-cart">
                          <a class="add-to-cart-button id'.$row['id'].'" href="#" title="Добавить в корзину"></a>
                        </div>
                        <div class="add-to-links">
                          <div class="add-to-wishlist">
                            <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                          </div>
                          <div class="add-to-compare">
                            <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                          </div>
                          <div class="quikview">
                            <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="product-list">
                      <h3>'.$row['name'].'</h3>
                      <div class="price">&#8381; '.$row['price'].'</div>
                  </div>
              </div>
          </div>';
}
?>