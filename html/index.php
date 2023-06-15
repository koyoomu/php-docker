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
  <h1>Hello PHP World!</h1>
  <?php 
  $message = '今日の日付'.date('Y/m/d');
  define('TITLE','配列とは');
  $a = array('田中',100,'OK');
  $a[] = 200;
  array_push($a, 400, 500);
  unset($a[2]);
  ?>
  <p><?= $message ?></p>
  <p><?= TITLE;?></p>
  <p>
<?php print_r($a);?><br>
  </p>
</body>
</html>