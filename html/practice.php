  <?php
  define('TITLE','Hello PHP World!');
  $message = '条件分岐';


  $a = mt_rand(0, 100); 
  switch ($a) {
    case $a === 100 :
      $judge = "$a Perfect!";
      break;
    case $a >= 80 :
      $judge = $a .'良く出来ました！';
      break;
    case $a >= 60 :
      $judge = $a .'合格！';
      break;
    default : $judge = $a .'点でした';
  }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="discription" content="php.test">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpローカルサーバー</title>
</head>
<body>
  <h1><?= TITLE; ?></h1>
  <p><?= $message; ?></p>
  <p><?= $judge; ?></p>
</body>
</html>