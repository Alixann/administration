<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "test";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);

$name = isset($_POST["name"]) ? $_POST["name"] : null;
$people = isset($_POST["people"]) ? $_POST["people"] : null;
$geography = isset($_POST["geography"]) ? $_POST["geography"] : null;
$link = isset($_POST["link"]) ? $_POST["link"] : null;
$link2 = isset($_POST["link2"]) ? $_POST["link2"] : null;
$link3 = isset($_POST["link3"]) ? $_POST["link3"] : null;



if ($name !== null && $people !== null && $geography !== null && $link !== null && $link2 !== null && $link3 !== null ) {
    $row = "UPDATE general_info SET name = :name, people = :people, geography = :geography, link = :link, link2 = :link2, link3 = :link3";
    $query = $pdo->prepare($row);
    $query->execute(["name" => $name, "people" => $people, "geography" => $geography, "link" => $link, "link2" => $link2, "link3" => $link3]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/mainpage.php">';
} else {
    echo "Ошибка: одно из полей не заполнено!";
}
?>
