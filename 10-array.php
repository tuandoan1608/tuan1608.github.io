<?php
$array = array("a", "b", "c", "d", "e");

$newArr = array_slice($array, 2);

echo "<pre>";
print_r($newArr);
echo "</pre>";

$newArr1 = array_slice($array, 2, 2);

echo "<pre>";
print_r($newArr1);
echo "</pre>";

$newArr2 = array_slice($array, 2, 2, true);
echo "<pre>";
print_r($newArr2);
echo "</pre>";

//sắp xếp
$so = array(1,20,45,12,13,18,45);

echo "<pre>";
print_r($so);
echo "</pre>";

sort($so);

echo "<pre>";
print_r($so);
echo "</pre>";


