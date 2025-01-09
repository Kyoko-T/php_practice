<?php
  $name = "俵本京子";
  if ($name == "俵木京子"){
    echo "私は 俵本京子 です";
  } else {
    echo "あなたの名前ではありません";
  }


  $total = 0;
  for($i = 0;$i <=10000; $i++){
    $total += $i; 
  }
  echo $total;


  $fruits = array("柿", "桃", "マンゴー", "蜜柑", "バナナ");
  foreach($fruits as $fruits){
    echo $fruits;  
    echo "\n";
  }


  $start = 1;
  $end = 100;
  for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
      echo $i;  
      echo "\n";
    }
  }
?>  


  

