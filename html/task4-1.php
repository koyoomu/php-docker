<?php
$a = mt_rand(0,100);
if ($a <= 5) {
  $judge = "大凶";
} elseif ($a <= 20) {
  $judge = "凶";
} elseif ($a <= 50) {
  $judge = "吉";
} elseif ($a <= 80) {
  $judge = "中吉";
} else {
  $judge = "大吉";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-practice">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <h1><?= '今日の運勢は'.$judge.'です。'; ?></h1>
</body>
</html>