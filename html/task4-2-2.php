<?php
$a = mt_rand(1,12);
if ($a >= 3 && $a <= 5) {
  $judge = $a.'月は春です。';
} elseif ($a >= 6 && $a <= 8){
  $judge = $a .'月は夏です。';
} elseif ($a >=9 && $a <= 11) {
  $judge = $a .'月は秋です。';
} else {
  $judge = $a .'月は冬です。';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-practice">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習中</title>
</head>
<body>
  <h1><?= $judge; ?></h1>
</body>
</html>