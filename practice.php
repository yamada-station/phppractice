<?php
echo 'hello php!' . "\n";

$a = 10;
$b = 5;
echo $a + $b . "\n";

$array_month = ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'];
echo $array_month[7] . "\n";

$hello = "Hello, ";
$name = "Yamada";
$world = "'sWorld";
echo $hello . $name . $world . "\n";

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost . "\n"; 

$calendar_2018 = [
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
echo $calendar_2018["December"] . "\n";
