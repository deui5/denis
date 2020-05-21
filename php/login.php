<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>PHP web-site</title>
</head>
<body>
  <?php require "../blocks/header.php" ?>
  <div class="container mt-4">
    <?php
     if ($_COOKIE['user']==''):
      ?>
      <div class="row">
         <div class="col">
           <h1>Всё еще не с нами?</h1>
           <form  action="check.php" method="post">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

             <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя"><br>

             <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-success"  type ="submit" >Регистрация</button>
           </form>
         </div>


         <div class="col">
           <h1>Уже есть аккаунт?</h1>
           <form  action="auth.php" method="post">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

             <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-success"  type ="submit" >Авторизация</button>
           </form>
         </div>
           <?php else:?>
             <p>Привет  <?php $_COOKIE['user'] ?>.Чтобы выйти нажмите  <a href="exit.php">здесь</a> </p>
         <?php endif; ?>

      </div>
  </div>

</body>
<?php require "../blocks/footer.php" ?>
</html>
