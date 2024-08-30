<?php session_start();?>
<?php require_once '../functions/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>Админка</title>
</head>
<body>

<?php if(!empty($_SESSION["login"])) :?>

<div class="h1_wrapper">
<h2><?php echo "Добрый день! ".$_SESSION['login']; ?></h2>
<a href="/logout.php"><button class="button">Выйти</button></a>
</div>
<h3>Редактирование информации на главном экране</h3>
<?php
$sql = $pdo ->prepare("SELECT * FROM mainpage");
$sql ->execute();
$res=$sql->fetch(PDO::FETCH_OBJ);
?>

<form action ="/admin/mainpage/mainpage.php" method="POST">
<input type="text" name="name" value ="<?php echo $res->name ?>">
<input type="text" name="description" value ="<?php echo $res->description ?>">
<input type="submit" value ="Сохранить" class="button">
</form>

<?php else:
echo '<h2>Вы не админ))</h2>';
echo '<a href = "/main.html">На главную</a>';
?>

<?php endif ?>
</body>
</html>