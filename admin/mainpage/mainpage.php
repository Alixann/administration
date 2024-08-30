<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "test";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);

$name = isset($_POST["name"]) ? $_POST["name"] : null;
$description = isset($_POST["description"]) ? $_POST["description"] : null;

if ($name !== null && $description !== null) {
    $row = "UPDATE mainpage SET name = :name, description = :description";
    $query = $pdo->prepare($row);
    $query->execute(["name" => $name, "description" => $description]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/mainpage.php">';
} else {
    echo "Ошибка: одно из полей не заполнено!";
}
?>
