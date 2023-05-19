<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>StopNow</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="registration.php" method="post">
			<h1 class="reg">Зарегистрироваться</h1>
			<input type="text" name="fname-reg" pattern="[\u0400-\u04ff]{3,30}" placeholder="Firstname" />
			<input type="text" name="lname-reg" pattern="[\u0400-\u04ff]{3,30}" placeholder="Lastname" />
			<input type="email" name="email-reg" placeholder="Email" />
			<input type="text" name="login-reg" pattern="[a-zA-Z]{3,30}" placeholder="Login" />
			<input type="password" name="password-reg" placeholder="Password" />
			<input type="password" name="password-repeat" placeholder="Repeat the password" />
        <input type="submit" placeholder="Зарегистрироваться" class="button">
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="autorisation.php" method="post">
			<h1>Войти</h1>
			<input type="text" name="login-log" pattern="[a-zA-Z]{3,30}" placeholder="Email" />
			<input type="password" name="password-log" placeholder="Password" />
			<input type="submit" placeholder="Авторизоваться" class="button autoris">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
        <h1>Здравствуй!</h1>
				<p>Введите свои личные данные и начните путешествие вместе с нами</p>
				<button class="ghost" id="signIn">Войти</button>
			</div>
			<div class="overlay-panel overlay-right">
        <h1>С возвращением!</h1>
				<p>Чтобы поддерживать с нами связь, пожалуйста, войдите в систему, указав свои личные данные</p>
				<button class="ghost" id="signUp">Зарегистрироваться</button>
			</div>
		</div>
	</div>
</div>
<script src="scripts/index.js"></script>
</body>
</html>
