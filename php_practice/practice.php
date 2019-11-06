<?php

//課題１
$a = 3;
$b = 7;

echo $a + $b . "\n";

//課題２
$array_month = [
    "1月","2月","3月","4月",
    "5月","6月","7月","8月",
    "9月","10月","11月","12月"];

echo $array_month[7] . "\n";
//8月と表示される

//課題３
$hello = "Hello,";
$name = "yoshioka daiki";
$world = "'s World!";

echo $hello . $name . $world . "\n";

//課題4
$tech_boost = "tech ";


echo $tech_boost . "boost" . "\n";


//課題5
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar["December"] . "\n";

?>