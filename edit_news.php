<?php
$news_id = $_GET['news_id'];
$heading = $_POST['heading'];
$img = $_POST['img'];
$text = $_POST['text'];
$category = $_POST['category'];
$date = date('Y-m-d');
require 'link.php';
$mysql->query("UPDATE `news` SET `heading` = '$heading', `img` = '$img', `text` = '$text', `category` = '$category', `date` = '$date' WHERE `news_id`= '$news_id'");
header('Location: admin.php');

