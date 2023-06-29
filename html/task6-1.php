<!-- 一番最初に思いついたのはfor文でしたのでfor文を使いました。 -->
<?php
function showString($num, $str) {
  for ($i = 0; $i < $num; $i++){
    echo $str;
  }
}
showString(3, "気合いだ！<br>");
echo '<br>';
?>

<!-- 下記にビルトイン関数使ってみました -->
<?php
function showString1($num1, $str1) {
  echo str_repeat($str1, $num1);
}
showString(3, '気合いだ！<br>');
echo '<br>';
?>

<!-- 下記にwhile文を使ってみた -->
<?php
function showString2($num2, $str2) {
  $count = 0;
  while ($count <= $num2) {
    echo $str2;
    $count++;
  }
}
showString2(3, '気合いだ！<br>');
?>