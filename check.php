<?php
    $login = filter_var (trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var (trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    if(mb_strlen($login) < 4 || mb_strlen($login)>30){
       echo "Недопустимая длина логина";
       exit();
    }
    else if(mb_strlen($pass) < 4 || mb_strlen($pass)>100){
        echo "Недопустимая длина пароля";
        exit();
    }
    $mysql = new mysqli('127.0.0.1','root', '','inj_project');
    $mysql->query("INSERT INTO `users` (`login`, `pass`) 
    VALUES('$login','$pass')");
    header('Location: login.php');