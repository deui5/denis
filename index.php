<!DOCTYPE html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php if($_COOKIE['user'] == ''):
    ?>
    <?php require "blocks/header.php" ?>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Добро пожаловать</h1>
        <p class="lead font-weight-normal">Здесь вы можете узнать много нового про веб-разработку или улучшить уже имеющиеся знания.</p>
        <a class="btn btn-outline-secondary" href="php/login.php">Присоединиться</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

<?php else: ?>
  <?php require "blocks/header2.php" ?>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Добро пожаловать</h1>
      <p class="lead font-weight-normal">Здесь вы можете узнать много нового про веб-разработку или улучшить уже имеющиеся знания.</p>
      <a class="btn btn-outline-secondary" href="php/main.php">Присоединиться</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  <?php endif;?>

<?php require "blocks/footer.php" ?>

</body>
</html>
