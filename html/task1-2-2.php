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
  define('TAX','10%');   //define
  $tax = 0.1;
  $PencilPrice = 100;
  $TaxIncludedPencilPrice = $PencilPrice + $PencilPrice * $tax;
  $ErasePrice = 200;
  $TaxIncludedErasePrice = $ErasePrice + $ErasePrice * $tax;
  ?>
  <p><?='現在、消費税は'.TAX.'です。'.'<br>'; ?></p>
  <p><?='鉛筆が'.$PencilPrice.'円で税込'.$TaxIncludedPencilPrice.'円です。'.'<br>'; ?></p>
  <p><?='消しゴムが'.$ErasePrice.'円で税込'.$TaxIncludedErasePrice.'円です。' ?></p>
</body>
</html>