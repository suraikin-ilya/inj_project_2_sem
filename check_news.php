<?php
$heading = $_POST['heading'];
$img = $_POST['img'];
$text = $_POST['text'];
$category = $_POST['category'];
$date = date('Y-m-d');
$mysql = new mysqli('127.0.0.1','root', '','inj_project');
$mysql->query("INSERT INTO `news` (`heading`,`category`, `img`, `text`, `date`)
VALUES('$heading','$category','$img','$text','$date')");
header('Location: admin.php');