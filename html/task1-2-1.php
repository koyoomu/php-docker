<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php.testing">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $message = '現在、消費税は10%です。';
  $content = '鉛筆が100円で税込110円です。';
  define('MESSAGE','消しゴムが200円で税込220円です。');
  ?>
  <P><?=$message.'<br>' ?></P>
  <p><?=$content.'<br>' ?></p>
  <p><?=MESSAGE; ?></p>
</body>
</html>