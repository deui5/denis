<!DOCTYPE html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <body>
    <div class="card-body">
  <h1 class="h3 mb-4 mt-3 text-left">Регистрация</h1>
  <form action="php/check.php" method="post">
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

    <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя"><br>

    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>
  <input type="submit" name="commit" value="Зарегистрироваться" class="btn btn-primary btn-block" data-facebook-pixel-id="CompleteRegistration" data-disable-with="Зарегистрироваться">
  <div class="small mt-1 text-center">
  Зарегистрировавшись, вы принимаете наши <a href="/pages/tos">Условия использования</a> и <a href="/pages/privacy">Политику конфиденциальности</a>.
  </div>
  </form></div>
  </body>
</html>
