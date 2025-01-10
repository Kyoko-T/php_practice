<?php
function doublenum($a){
    return $a*2;    
}
echo doublenum(3)
?>

<?php
function add($a, $b){
    return  $a +$b;
}
echo add(3,5);

$arr = array(1, 3, 5, 7, 9);
function Func($arr){
    $ret=$arr[0];
    foreach($arr as $value) {
        $ret *= $value;
    } 
echo $ret;}
echo Func($arr);

$arr = array(1, 3, 5, 7, 112, 0);
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
    echo $max_number;    
}    

echo max_array($arr);
?>


