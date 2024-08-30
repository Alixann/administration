<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "test";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);

$phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
$logo = isset($_POST["logo"]) ? $_POST["logo"] : null;

if ($phone !== null && $logo !== null) {
    $row = "UPDATE header SET phone = :phone, logo = :logo";
    $query = $pdo->prepare($row);
    $query->execute(["phone" => $phone, "logo" => $logo]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/header.php">';
} else {
    echo "Ошибка: одно из полей не заполнено!";
}
?>
