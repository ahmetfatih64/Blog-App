<?php

$numbers = array(1, 5, 7, 4, 56, 78, 12, 45);
$names = array("ali", "zeynep", "canan", "beril");
$currentUsers = array("sadikturan" => "38", "cinarturan" => "4", "yigitbilgi" => "12");

// echo count($sayilar)."<br>";
// echo count($isimler)."<br>";
// echo count($kullanicilar)."<br>";

# artan sırada
sort($numbers);
sort($names);
asort($currentUsers); # value
ksort($currentUsers); # key

# azalan sırada
rsort($numbers);
rsort($names);
arsort($currentUsers); # value
krsort($currentUsers); # key

print_r($numbers);
echo "<br>";
print_r($names);
echo "<br>";
print_r($currentUsers);

# string to array
$string = "sadık|turan|38";
$arr = explode("|", $string);

# array to string
$arr = array("sadık", "turan", "38");
$string = implode(",", $arr);

# random design
print_r($names);
echo "<br>";
shuffle($names);
print_r($names);
print_r($string);

# array merge
$plateNumber = array("41", "34");
$cities = array("kocaeli", "istanbul");

$arr = array_combine($plateNumber, $cities);

$arr1 = ["istanbul", "kocaeli"];
$arr2 = ["rize", "izmir"];

$arr = array_merge($arr1, $arr2);

# element repeat components
$arr1 = ["istanbul", "kocaeli", "istanbul", "kocaeli", "izmir", "rize"];
$arr = array_count_values($arr1);

# add element to end of array
array_push($arr1, "giresun");

# add element to per of array
array_unshift($arr1, "yalova");

print_r($arr1);
?>