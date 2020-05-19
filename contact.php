<!doctype html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Контактная форма</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  if($_COOKIE['user'] == ''):
    ?>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5" align="center">
      <h3>Контактная форма</h3>
      <form  action="php/email.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        <button class="btn btn-success"type="submit" name="send">Отправить</button>
      </form>

<?php else: ?>
  <?php require "blocks/header2.php" ?>
  <div class="container mt-5" align="center">
    <h3>Контактная форма</h3>
    <form  action="php/email.php" method="post">
      <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
      <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
      <button class="btn btn-success"type="submit" name="send">Отправить</button>
    </form>
  <?php endif;?>
  <br>
  <br>
  <?php require "blocks/footer.php" ?>


</body>
</html>
