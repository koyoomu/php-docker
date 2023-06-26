<?php
$a = mt_rand(1,12);

switch ($a) {
  case $a >= 3 && $a<= 5 :
    $judge = $a.'月は春です。';
    break;
  case $a >= 6 && $a <= 8 :
    $judge = $a.'月は夏です。';
    break;
  case $a >= 9 && $a <= 11 :
    $judge = $a.'月は秋です。';
    break;
  default:
    $judge = $a.'月は冬です。';
    break;
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
  <h1><?= $judge; ?></h1>
</body>
</html>