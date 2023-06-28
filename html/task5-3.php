<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-practice">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="task3-1.css">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $title = ['商品', '価格', '税込価格'];
  $items = [
    ['商品' => '鉛筆', '価格' => '100円', '税込価格' => '110円'],
    ['商品' => '消しゴム', '価格' => '200円', '税込価格' => '220円'],
    ['商品' => '定規', '価格' => '300円', '税込価格' => '330円']];
  ?>
  <table>
    <tr>
    <?php
    foreach ($title as $name) {
      echo "<th>". $name. "</th>";
    }
    ?>
    </tr>
    <tr>
    <?php foreach ($items as $item) :?>
    <td><?php echo $item['商品']; ?></td>
    <td><?php echo $item['価格']; ?></td>
    <td><?php echo $item['税込価格']; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>