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
  $pencil = ['鉛筆', '100円', '110円'];
  $erase = ['消しゴム', '200円', '220円'];
  $ruler = ['定規', '300円', '330円'];
  ?>
  <table>
    <tr><?php
    foreach ($title as $name) {
      echo "<th>". $name. "</th>";
    }
    ?>
    </tr>
    <?php
    foreach ($pencil as $name) {
      echo "<td>". $name. "</td>";
    }
    ?>
    <tr>
    <?php
    foreach ($erase as $name) {
      echo "<td>". $name. "</td>";
    }
    ?>
    </tr>
    <tr>
    <?php
    foreach ($ruler as $name) {
      echo "<td>". $name. "</td>";
    }
    ?>
    </tr>
  </table>
</body>
</html>