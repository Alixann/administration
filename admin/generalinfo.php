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
<h3>Редактирование информации в блоке "Общие сведения"</h3>
<?php
$sql = $pdo ->prepare("SELECT * FROM general_info");
$sql ->execute();
$res=$sql->fetch(PDO::FETCH_OBJ);
?>

<form action ="/admin/generalinfo/generalinfo.php" method="POST">
<input type="text" name="name" value ="<?php echo $res->name ?>">
<input type="text" name="people" value ="<?php echo $res->people ?>">
<input type="text" name="geography" value ="<?php echo $res->geography?>">
<input type="text" name="link" value ="<?php echo $res->link ?>">
<input type="text" name="link2" value ="<?php echo $res->link2 ?>">
<input type="text" name="link3" value ="<?php echo $res->link3 ?>">
<input type="submit" value ="Сохранить" class="button">
</form>

<?php else:
echo '<h2>Вы не админ))</h2>';
echo '<a href = "/main.html">На главную</a>';
?>

<?php endif ?>
</body>
</html>