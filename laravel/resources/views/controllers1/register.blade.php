<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<form class="form" action="" method="post">
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