<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/login.css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<main>
            <div class="login">
                <form method="POST" action="auth.php">
                    <input id="login" name="login" type="text" placeholder="login" required><br>
                    <input name="pass" type="password"placeholder="Пароль" required><br>
                    <input name="submit" type="submit" value="Войти">
                </form>
                <a href="./registration.php">Регистрация</a>
            </div>
		</main>
		<footer>
			<span>©2021</span>
		</footer>
	</body>
</html>