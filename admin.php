<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <a href="exit.php">Выйти</a>
    <a href="index.php">Главная</a>
    <a href="add_news.php">Добавить новость</a>
    <h1>Список новостей</h1>
    <table style="border: 0px">
    <?php
    $mysql = new mysqli('127.0.0.1','root', '','inj_project');
    $news = $mysql->query("SELECT * FROM `news`");
    for($number = 1;$row=$news->fetch_array();$number++)
    {
        echo "<tr>"."<th>".$number ."."."</th>"."<th>".$row['heading']."</th>"."<th>". '<a style="display: inline-block;" href="?del='.$row['news_id'].'">удалить</a>'."</th>"."<th>". '<a style="display: inline-block;margin-left: 10px; width:130px;" href="update_news.php?news_id='.$row['news_id'].'&heading='.$row['heading'].'">Редактировать</a>'."</th></tr>";
    }
    if(!empty($_GET['del'])){
        $queryDel = "DELETE FROM `news` WHERE news_id=".$_GET['del'];
        mysqli_query($mysql, $queryDel) or die(mysqli_error($mysql));
    }
    ?>
    </table>
</div>
</body>
</html>