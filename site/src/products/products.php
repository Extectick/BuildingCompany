<?php
// Создрание объекта Products
class Products {
 
    // подключение к БД таблице "poducts" 
    private $conn;
    private $table_name = "products";
 
    // свойства объекта 
    public $id;
    public $name;
    public $price;
    public $img;

    // конструктор класса Products 
    public function __construct($db) {
        $this->conn = $db;
    }

    // Создание нового товара 
    function create() {
    
        // Вставляем запрос 
        $query = "INSERT INTO " . $this->table_name . "
                SET
                    name = :name,
                    price = :price,
                    img = :img";
    
        // подготовка запроса 
        $stmt = $this->conn->prepare($query);
    
        // Очистка 
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->price=htmlspecialchars(strip_tags($this->price));
        $this->img=htmlspecialchars(strip_tags($this->img));
        // привязываем значения 
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':img', $this->img);
        // Выполняем запрос 
        // Если выполнение успешно, то информация о товаре будет сохранена в базе данных 
        if($stmt->execute()) {
            return true;
        }
    
        return false;
    }

    function show() {
        $query = "SELECT * FROM " . $this->table_name . "";

        

        while ($r= mysqli_fetch_array($query)) {
                echo $r['id'] . " ";
                echo $r['name'] . " ";
                echo $r['price'] . "<br />";
        }
    }

    function delete() {
        $query = "DELETE FROM " . $this->table_name . "WHERE `id` = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);

        // Очистка id
        $this->id=htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            
            return true;
        }
        return false;

    }
}
?>