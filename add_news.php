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
        <input id="zagolovok" name="zagolovok" type="text" placeholder="Заголовок новости" required><br>
        <input id="img" name="img" type="text" placeholder="url картинки" required><br>
        <input id="text" name="text" type="text" placeholder="Текст статьи" required><br>
        <button type="submit">Добавить</button>
    </form>
</div>
</body>
</html>