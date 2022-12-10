<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
<br><br><br><br><br>
@foreach ($arr as $elem)
<a href="comics{{$elem->id}}">{{$elem->Name}}</a>
<img src="{{$elem->Image}}">
<p>{{$elem->Detail}}</p>
<p>{{$elem->Price}}</p>
<p>{{$elem->Years}}</p>
<p>{{$elem->Page}}</p>
<p>{{$elem->Category}}</p>
@endforeach
</body>
</html>