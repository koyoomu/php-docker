<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-practice"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $days = ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"];
  $count = 0;
  ?>
  <ul>
    <?php
    while ($count < count($days)) {
      echo "<li>" . $days[$count]. "</li>";
      $count++;
    }
    ?>
  </ul>
  <!-- do version -->
  <?php
  $DayOfWeek = ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"];
  $count = 0;
  ?>
  <ul>
    <?php
    do {
      echo "<li>" . $DayOfWeek[$count]. "</li>";
      $count++;
    } while ($count < count($DayOfWeek));
    ?>
  </ul>
</body>
</html>