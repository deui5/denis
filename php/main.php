<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP web-site</title>
</head>
<body>
  <?php
  if($_COOKIE['user'] == ''):
    ?>
    <?php require "../blocks/header.php" ?>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Ошибка</h1>
    <p class="lead">Вы не авторизованы</p>
  </div>
  <?php else: ?>
    <?php require "../blocks/header2.php" ?>
    <h1 class="cheers" align="center">Привет, <?=$_COOKIE['user']?>!</h1>
    <h2 class="cheers text-muted" align="center">Ученье - свет, неученье - тьма.</h2>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">PHP</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Доступные вам курсы</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><a href="https://ru.hexlet.io/u/new">Основы PHP</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Как работать с PHP?</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Переменные и их типы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Константы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Строковые операции</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Циклы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Массивы</a></li>
          </ul>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">HTML</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">От новичка до Pro</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><a href="https://ru.hexlet.io/u/new">Основы HTML</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Как работать с HTML?</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Переменные и их типы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Константы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Строковые операции</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Циклы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Массивы</a></li>
          </ul>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">CSS</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">От новичка до Pro</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><a href="https://ru.hexlet.io/u/new">Основы CSS</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Как работать с CSS?</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Переменные и их типы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Константы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Строковые операции</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Циклы</a></li>
            <li><a href="https://ru.hexlet.io/u/new">Массивы</a></li>
          </ul>
        </div>
      </div>
    </div>
<?php endif;?>


  <?php require "../blocks/footer.php" ?>
</body>
</html>
