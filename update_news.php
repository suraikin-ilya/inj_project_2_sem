<?php
$news_id = $_GET['news_id'];
$mysql = new mysqli('127.0.0.1','root', '','inj_project');
$row= $mysql->query("SELECT * FROM `news` WHERE `news_id`= '$news_id'")->fetch_array();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Редактирование новости</title>
    <link rel="stylesheet" href="css/add_news.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <form action="check_news.php" method="post">
        <input id="heading" name="heading" type="text" value="<?php echo $row['heading']?>" required><br>
Категория<br>
        <select name = "category" id="category" required><br>
            <option value = "1" selected>В мире</option>
            <option value = "2">В Москве</option>
            <option value = "3">Политика</option>
            <option value = "4">Происшествия</option>
            <option value = "5">Наука и техника</option>
            <option value = "6">Спорт</option>
        </select>
        <input id="img" name="img" type="text" value="<?php echo $row['img']?>" required><br>
        <input id="text" name="text" type="text" value="<?php echo $row['text']?>" required><br>
        <button type="submit">Редактировать</button>
    </form>
</div>
</body>
</html>