<?php
$a = 
"<html>
  <body>
    <title>
      strip_tagsとは
    </title>
    <p>HTML、XML、および PHP タグから文字列を取り除きます。</p>
  </body>
</html>";
echo $a;
$a_result=strip_tags($a);
echo $a_result;


$b=array(1, 2, 3, 4, 5);
array_push($b, 6, 7);
print_r($b);


$a = array(1, 2, 3);
$b = array(10, 20, 30);
$c = array(100, 200, 300);
$d = array_merge($a, $b, $c);
print_r($d);

echo '現在のUnixタイムスタンプ:'.time();

$nweek=time()+(3*24*60*60);
echo '３日後のUnixタイムスタンプ:'.$nweek;

$timestamp =mktime(0,0,0,8,1,2017);
echo $timestamp;

echo date('Y-m-d H:i:s');