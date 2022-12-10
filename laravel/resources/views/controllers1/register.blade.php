<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
	<div class="menu">
		<img src="img/lg.JPG">
                <a href="about_us">О нас</a>
                <a href="catalog">Каталог</a>
                <a href="product">Товар</a>
                <a href="where_can_I_find_us">Где нас найти?</a>
                <a href="auth">Войти</a>
                <a href="register">Зарегистрироваться</a> 
        </div>
</header>
<form class="form" action="" method="post">
<br><br><br><br><br><br><br><br><br>
      <h2>Регистрация</h2>
      <input class="input" type="text" placeholder="Ваше имя" />
      <input class="input" type="text" placeholder="Ваша фамилия" />
      <input class="input" type="text" placeholder="Ваше отчество" />
      <input class="input" type="text" placeholder="Логин" />
      <input class="input" type="email" placeholder="Ваш e-mail" />
      <input class="input" type="password" placeholder="Пароль" />
      <input class="input" type="password" placeholder="Повторите пароль" />
      <input class="input" type="text" placeholder="Соглашение с правилами" />
      <button class="btn" type="submit">Отправить</button>
      <br />
      <a class="btn2" href="auth.blade.php">Уже зарегистрированы? Войти</a>
    </form>
</body>
</html>