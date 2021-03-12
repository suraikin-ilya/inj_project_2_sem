<?php
$news_id = $_GET['news_id'];
require 'link.php';
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
    <form action="edit_news.php?news_id=<?php echo $news_id?>" method="post">
        <input id="heading" name="heading" type="text" value="<?php echo $row['heading']?>" required><br>
Категория<br>
        <select name = "category" id="category" required><br>
            <option value = "1">В мире</option>
            <option value = "2">В Москве</option>
            <option value = "3">Политика</option>
            <option value = "4">Происшествия</option>
            <option value = "5">Наука и техника</option>
            <option value = "6">Спорт</option>
        </select>
        <input id="img" name="img" type="text" value="<?php echo $row['img']?>" required><br>
        <textarea id="text" name="text" type="text" required><?php echo $row['text']?></textarea><br>
        <button type="submit">Редактировать</button>
    </form>
</div>
</body>
</html>