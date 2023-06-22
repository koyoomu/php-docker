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
  <?php
  define('TITLE','Hello PHP World!');
  $message = '演算子とは';
  $a = 0;

  ?>
  <h1><?=TITLE; ?></h1>
  <p><?=$message; ?></p>
  <p>
    <?php
    $b = ++$a;
    echo $a .'<br>';
    echo $b .'<br>';
    
    $a = 0;
    $b = $a++;
    echo $a .'<br>';
    echo $b .'<br>';
    ?>
  </p>
</body>
</html>