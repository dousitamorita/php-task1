<?php
$name = "morita tsuyoshi";

if($name = "morita tsuyoshi") {
    echo "私はあなたの名前です。";
}else{
    echo "あなたの名前ではありません。";
}

echo "\n";

$total = 0;

for($i = 0; $i <= 1000; $i++){
    $total += $i;
}

echo $total;
echo "\n";

$fruits = array("apple", "strawberry", "orange", "kiwi", "coconat");

foreach($fruits as $fruit){
    echo $fruit.',';
}
echo "\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <=$end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}