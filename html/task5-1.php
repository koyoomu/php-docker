<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-practice">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
  <?php 
  $title = '九九の計算<br>';
  echo $title; 
  ?>
  </h1>
  <table>
  <?php
  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($i = 1; $i <= 9; $i++) {
        $ans = $a * $i;
        echo '<td>'.$a.' × '.$i.' = '.$ans.'　</td>';
    }
    echo '</tr>';
}
?>
  </table>
</body>
</html>