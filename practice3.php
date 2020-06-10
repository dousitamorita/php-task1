<?php
function double($value) {
    $result = $value * 2;
    return $result;
}
echo double(4);
echo "\n";

function addnum($a,$b){
    $total = $a + $b;
    return $total;
}
echo addnum(4,3);
echo "\n";

function outputMultiprication($arr){
    $result = 1;
    foreach($arr as $b){
        $result *= $b;
    }echo $result;
}

outputMultiprication(array(1,3,5,7,9));
echo "\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
    $max_number = $a;
    }
  }return $max_number;
}
 
 echo max_array(array(1,3,5,7,9));
 echo "\n";
 
 $str = "<p><b>php</b></p>";
 $new_str = strip_tags($str,"<p>");
 echo $new_str;
 echo "\n";
 
 $fruits = array("banana","apple","orenge");
 array_push($fruits, "strawberry");
 echo $fruits[3];
 echo "\n";
 
 $fruits1 = array("banana","apple");
 $fruits2 = array("orenge","strawbetty");
 $fruits3 = array_merge($fruits1,$fruits2);
 foreach ($fruits3 as $array_fruit){
     echo $array_fruit;
     echo "\n";
 }
 
 echo "現在のUNIXTIMEは".time();
 echo "\n";
 
 $next_morning = mktime(7,0,0,6,11,2020);
 echo $next_morning;
 echo "\n";
 
 echo date('y/m/d');
 echo "\n";
 echo date('Y/m/d');
 echo "\n";
 