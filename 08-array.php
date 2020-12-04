<?php
    $arr1 = array("name"=>"PHP", "time" => 120, "Zend", "Joomla");
    $arr2 = array("PHP", 100);
    
    //khác nhau 2 mảng
    $newArr = array_diff($arr1, $arr2);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    
    $newArr1 = array_diff_key($arr2, $arr1);
    echo "<pre>";
    print_r($newArr1);
    echo "</pre>";
    
    $newArr2 = array_diff_assoc($arr1, $arr2);
    echo "<pre>";
    print_r($newArr2);
    echo "</pre>";
    
    // giống nhau 2 mảng
    $newArr3 = array_intersect($arr1, $arr2);
    echo "<pre>";
    print_r($newArr3);
    echo "</pre>";
    
    $newArr4 = array_intersect_key($arr2, $arr1);
    echo "<pre>";
    print_r($newArr4);
    echo "</pre>";
?>