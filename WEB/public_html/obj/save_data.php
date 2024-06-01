<?php
 $address = '127.0.0.1';
  $login = 'root';
   $pass = '';
   $db = 'obj';
   $mysql;

$conn = new mysqli($address, $login, $pass, $db);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['alt'], $_POST['id'])){
// Получение данных из AJAX запроса
$alt = $_POST['alt'];
$id = $_POST['id'];

// Вставка данных в базу данных
$sql = "UPDATE `value` SET value_data = '$alt' WHERE id = '$id';";
if ($conn->query($sql) === TRUE) {
    echo "Данные успешно обновлены";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}


}
// Закрытие соединения с базой данных
$conn->close();
?>

