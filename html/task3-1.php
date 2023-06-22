<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-test">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
  <link rel="stylesheet" href="task3-1.css">
</head>
<body>
  <?php
  $product = '商品';
  $price = '価格';
  $TaxIncludedPrice = '税込価格';
  $TotalPrice = '1Dzの価格';
  $pencil = '鉛筆';
  $erase = '消しゴム';
  $pencilprice = 100;
  $eraseprice = 200;
  $TaxIncludedPencilPrice = $pencilprice + $pencilprice * 0.1;
  $TaxIncludedErasePrice = $eraseprice + $eraseprice * 0.1;
  $TotalPencilPrice = $TaxIncludedPencilPrice * 12;
  $TotalErasePrice = $TaxIncludedErasePrice * 12;
  define('TITLE','消費税は10%です。');
  ?>
  <table>
    <tr>
      <th><?=$product; ?></th>
      <th><?=$price; ?></th>
      <th><?=$TaxIncludedPrice; ?></th>
      <th><?=$TotalPrice; ?></th>
    </tr>
    <tr>
      <td><?=$pencil; ?></td>
      <td><?=$pencilprice.'円'; ?></td>
      <td><?=$TaxIncludedPencilPrice.'円';?></td>
      <td><?=$TotalPencilPrice.'円'; ?></td>
    </tr>
    <tr>
      <td><?=$erase; ?></td>
      <td><?=$eraseprice.'円'; ?></td>
      <td><?=$TaxIncludedErasePrice.'円';?></td>
      <td><?=$TotalErasePrice.'円'; ?></td>
    </tr>
  </table>
  <p>
    <?php
    echo TITLE;
    ?>
  </p>
</body>
</html>