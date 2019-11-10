<?php

/*
設問１
引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
*/

function sum($Frame){
 
    return $Frame * 2;
    
}

echo sum(3) . "\n";

/*
設問２
$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
*/

function sumab($a,$b){
    return $a + $b;
}

echo sumab(2,5) . "\n";

/*
設問３
$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成してください。
*/

function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i === 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}

echo product(array(1, 3, 5 ,7, 9)) . "\n";


/*
設問４
【応用】次のプログラムは、配列の中で一番大きい値を返す max_array という
関数を実装しようとしています。途中の部分を完成させてください。
*/

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 
echo max_array(array(2, 10, 5)) . "\n";

/*
設問５
次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
*/
$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits) . "\n";

?>