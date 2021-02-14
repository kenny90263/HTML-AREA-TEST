<?php

/**
 * 
 *  1. 數組中的內容叫做 元素
 *  2. 每個元素都是由 鍵和值 組成
 *  3. 通過 key 使用值
 * 
 *  下標有兩中類型，一種是整數(索引數組)，一種是字符串(關聯數組)
 *  
 *  []來操作下標，也可以使用{}進行互換
 * 
 *  在使用下標時，如果使用關聯數組，一定要使用引號，不要使用常量名稱
 * 
 *  數組的自動增漲下標 默認是從 0 開始，自動增長的都是出現過的最大值 +1
 * 
 *  關聯數組的字符串下標，不會影響下標的排列規則
 * 
 *  使用 array() 函數聲明數組，默認是索引下標，從0開始
 * 
 *  PHP5.4以後 可以像其他語言一樣聲明數組了
 */








//array_unique();
/*
$test = array(
    'one' => 1, 2, 3, 4, 5,
    array(
        'two'   => 22,
        'three' => 33,
        'four'  => 44
    )

);
$test1 = array(6, 7, 8, 9, 10);


$result = array_merge($test, $test1);

echo "<pre>";
print_r($result);
echo "</pre>";


/*
$test_arr = array(
    array(
        "key1"  => "value1",
        "key2"  => "value2"
    ),
    array(
        "key3"  => "value3",
        "key4"  => "value4"
    ),
    array(
        "key5"  => "value5",
        "key6"  => "value6"
    )
);

$add_arr = ["key3"   => "valuead"];

$test_arr[0]["key3"] = "value3";


echo "<pre>";
print_r($test_arr);
echo "</pre>";


/*
$arr = array("aa","bb","cc");
$arr2 = ["aa","bb","key"=>"value"]; 

echo "<pre>";
print_r($arr2 );
echo "</pre>";

$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[] = 10;
$arr[8] = 10;
$arr[] = 10;
$arr[9] = 15;
$arr[] = 10;
$arr[4] = 444;
$arr[-100]= -100;
$arr[] = 10;
$arr[] = 10;



for ($i = 0; $i <= 100; $i++) {
    $arr[] = $i * $i;
}

$arr{0} = 1;
$arr[1] = 2;
$arr[2.5] = 3;
$arr['08'] = 8;
$arr[true] = 8;
$arr[false] = 8;
$arr[null] = 8;



$test_arr = array(
    array(
        "key1"  => "value1",
        "key2"  => "value2"
    ),
    array(
        "key3"  => "value3",
        "key4"  => "value4"
    ),
    array(
        "key5"  => "value5",
        "key6"  => "value6"
    )
);

$add_arr = array(
    "keyadd"   => "valuead"
);
array_push($test_arr,$add_arr);




echo "<pre>";
print_r($test);
print_r($test_arr);
echo "</pre>";

$add_arr = array(
    "keyadd"   => "valuead"
);

array_push($test_arr[0], "keyadd","valueadd");

foreach ($test_arr as $key => $value) {
    echo $key;
}

echo "<pre>";
print_r($test_arr);
echo "</pre>";
*/