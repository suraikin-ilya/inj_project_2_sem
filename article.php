<?php
$news_id = $_GET['news_id'];
$mysql = new mysqli('127.0.0.1','root', '','inj_project');
$news = $mysql->query("SELECT * FROM `news` WHERE `news_id`= '$news_id'")->fetch_array();;
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><?php echo $news['heading'];?></title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="wrapper">
			<?php require "header.php"?>
			<?php require "main_article.php"?>
			<?php require "footer.php"?>
	</div>
	</body>
</html>