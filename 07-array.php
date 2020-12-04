<?php
    //truy xuất phần tử của mảng
    $course = array("PHP", "Java", "Python", "Joomla", "JS");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    
    echo "Current: ". current($course)."<br/>";
    //echo "End: ". end($course)."<br/>";
    echo "Next: ". next($course)."<br/>";
    echo "Previous: ". prev($course)."<br/>";
    echo "Current: ". current($course)."<br/>";
    
    //chuyển mảng thành chuỗi đặc biệt
    $student = array("name" => "tuan", "age" => "21 tuổi", "sex" => "Nữ", 41);
    echo "<pre>";
    print_r($student);
    echo "</pre>";
    
    $result = serialize($student);
    echo $result;
    
    $newarr = unserialize($result);
    echo "<pre>";
    print_r($newarr);
    echo "</pre>";
    
    shuffle($course);
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    
    // tạo mảng từ biến có sẵn
    $name = "tuan";
    $age = 21;
    
    $arr = compact("name", "age");
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    
    //tạo mảng bằng range
    $arr1 = range(0, 10, 2);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    
    //tạo mảng bằng array_combine
    $keys = array("name", "age", "class");
    $values = array("tuan", "21 tuổi", "CTK41");
    $newarr1 = array_combine($keys, $values);
    echo "<pre>";
    print_r($newarr1);
    echo "</pre>";
    
   
?>