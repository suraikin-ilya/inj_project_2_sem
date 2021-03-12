<?php
setcookie('cookie_name', $user['login'], time() - 3600, "/");
header('Location: login.php');