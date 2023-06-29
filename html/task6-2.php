<?php
function max_number($n1, $n2) {
  return ($n1 > $n2) ? $n1: $n2;
}

$a = 9;
$b = 21;
$max = max_number($a, $b);
echo '$a = '.$a.'<br>';
echo '$b = '.$b.'<br>';
echo '$aと$bのうち最大値は'.$max.'です。';
?>