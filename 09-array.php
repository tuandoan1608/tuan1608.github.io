<?php
//gửi giá trị mảng vào function
    $array = array("name"=>"tuan", "age"=>21, 41, 100);
    
    function create($value, $key){
        echo $key. ": ".$value."<br/>";
    }
    
    array_walk($array, "create");
    
    function create1($value, $key, $param){
        echo $key. $param .$value."<br/>";
    }
    
    array_walk($array, "create1", " - ");
    
    //tạo mảng có giá trị x2
    $diem = array(5,6,7,8);
    echo "<pre>";
    print_r($diem);
    echo "</pre>";
    
    function x2(&$value, $key, $param=2){
        $value = $value * $param;
        
    }
    
    array_walk($diem, "x2", 2);
    echo "<pre>";
    print_r($diem);
    echo "</pre>";
    
    // cho mảng chuyển thành chẵn lẻ
    $mang = array(1,2,4,3);
    $mang1 = array(4,5,6,7);
    //Cách 1
    foreach ($mang as $key=>$value){
        $newArr[] = ($value%2==0)?"Chẵn":"Lẻ";
    }
    
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    
    //Cách 2
    function checkNum($value){
        $result = ($value%2==0)?"Chẵn":"Lẻ";
        return $result;
    }
    
    $newArr1 = array_map("checkNum", $mang);
    echo "<pre>";
    print_r($newArr1);
    echo "</pre>";
    
    function myFunction($n1, $n2){
        $result = $n1 *$n2;
        return $result;
    }
    
    $newArr2 = array_map("myFunction", $mang, $mang1);
    echo "<pre>";
    print_r($newArr2);
    echo "</pre>";
    
    
    
