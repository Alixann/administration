<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "test";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);

$number = isset($_POST["number"]) ? $_POST["number"] : null;
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$adress = isset($_POST["adress"]) ? $_POST["adress"] : null;
$timework = isset($_POST["timework"]) ? $_POST["timework"] : null;
if ($number !== null && $email !== null && $adress !== null && $timework !== null) {
    $row = "UPDATE footer SET number = :number, email = :email, adress = :adress, timework = :timework";
    $query = $pdo->prepare($row);
    $query->execute(["number" => $number, "email" => $email, "adress" => $adress, "timework"=>$timework]); 
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/footer.php">';
} else {
    echo "Ошибка: одно из полей не заполнено!";
}
?>
