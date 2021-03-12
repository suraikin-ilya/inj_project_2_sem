<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Добавление новости</title>
    <link rel="stylesheet" href="css/add_news.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <form action="check_news.php" method="post">
        <input id="heading" name="heading" type="text" placeholder="Заголовок новости" required><br>
        Категория<br>
        <select name = "category" id="category"required><br>
            <option value = "1" >В мире</option>
            <option value = "2">В Москве</option>
            <option value = "3">Политика</option>
            <option value = "4">Происшествия</option>
            <option value = "5">Наука и техника</option>
            <option value = "6">Спорт</option>
        </select>
        <input id="img" name="img" type="text" placeholder="url картинки" required><br>
        <textarea id="text" name="text"  placeholder="Текст статьи" required></textarea><br>
        <button type="submit">Добавить</button>
    </form>
</div>
</body>
</html>