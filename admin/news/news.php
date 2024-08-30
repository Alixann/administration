<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "test";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);

$title = isset($_POST["title"]) ? $_POST["title"] : null;
$description = isset($_POST["description"]) ? $_POST["description"] : null;
$date = isset($_POST["date"]) ? $_POST["date"] : null;

if ($title !== null && $description !== null && $date !== null) {
    $row = "UPDATE news SET title = :title, description = :description, date = :date";
    $query = $pdo->prepare($row);
    $query->execute(["title" => $title, "description" => $description, "date" => $date]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/news.php">';
} else {
    echo "Ошибка: одно из полей не заполнено!";
}
?>