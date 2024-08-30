<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <title>Админка</title>
</head>
<body>

<?php if(!empty($_SESSION["login"])) :?>
<div class="h1_wrapper">
<h2><?php echo "Добрый день! ".$_SESSION['login']; ?></h2>
<a href="/logout.php"><button class="button">Выйти</button></a>
</div>

<h3>Выберите блок который хотите отредактировать</h3>
<div class="block-for-edit">
<a href="./admin/header.php"><div class="grid-item">Шапка</div></a>
<a href="./admin/mainpage.php"><div class="grid-item">Главная страница</div></a>
<a href="./admin/generalinfo.php"><div class="grid-item">Общие сведения</div></a>
<a href="./admin/news.php"><div class="grid-item">Новости</div></a>
<a href="./admin/footer.php"><div class="grid-item">Подвал-контакты</div></a>
</div>
<?php else:
echo '<h2>Вы не админ))</h2>';
echo '<a href = "/index.php">На главную</a>';
?>

<?php endif ?>
</body>
</html>
