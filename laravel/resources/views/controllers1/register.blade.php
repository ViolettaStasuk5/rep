<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <nav class="navbar" role="navigation">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('auth/login') }}">Вход</a>
</li>;
<ul>
</nav>
<!--Ошибки-->
@if ($errors->has())
<div class="row">
<div class="col-md-8 col-md-offset-2">
                  <div class="alert alert-danger" role="alert">
                      <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                          <span aria-hidden="true">×</span>
                      </button>
                      <ul>                         
                          @foreach($errors->all() as $error)                         
                              <li> {{{ $error }}}</li>                         
                          @endforeach    
                      </ul>
                  </div>
              </div>
          </div>
      @endif
      <form role="form" method="post" action="{{ url('auth/register') }}">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" placeholder="Имя" name='name'>
            </div>
            <div class="form-group">
            <label for="surname">Фамилия</label>
            <input type="text" class="form-control" id="surname" placeholder="Фамилия" name='surname'>
            </div>
            <div class="form-group">
            <label for="patronymic">Отчество</label>
            <input type="text" class="form-control" id="patronymic" placeholder="Отчество" name='patronymic'>
            </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
          </div>
          <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" class="form-control" id="login" placeholder="Логин" name='login'>
            </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
          </div>
          <div class="form-group">
            <label for="password_repeat">Повторите пароль</label>
            <input type="password" class="form-control" id="password_repeat" placeholder="Повторите пароль" name="password_repeat">
          </div>
          <div class="form-group">
            <label for="rules">Соглашение с правилами регистрации</label>
            <input type="rules" class="form-control" id="rules" placeholder="Соглашение с правилами регистрации" name="rules">
            </div>
          <button type="submit" class="btn btn-default">Отправить</button>
        </form>
    </div>
</body>
</html>