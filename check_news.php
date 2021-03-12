<?php
$heading = $_POST['heading'];
$img = $_POST['img'];
$text = $_POST['text'];
$category = $_POST['category'];
$date = date('Y-m-d');
require 'link.php';
$mysql->query("INSERT INTO `news` (`heading`,`category`, `img`, `text`, `date`)
VALUES('$heading','$category','$img','$text','$date')");
header('Location: admin.php');