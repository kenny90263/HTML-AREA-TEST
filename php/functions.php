<?php

/**
 *  函數 (完成一段指定任務的已命名的代碼區塊)
 *  - 系統函數
 *  - 自定義函數
 *  
 *  
 *  1.函數名字定義要有意義
 *  2.函數名不分大小寫
 *  3.函數內部的變量，結束後將釋放 - - - 這叫 "局部變量"
 *  4.全局變量，在函數外部聲明的變量，可以在每個函數中使用
 *  5.靜態變量，腳本結束後才釋放。一般靜態變量作用是在函數內部去聲明的，共享
 * 
 */
?>


<?php


$a = 10;

function demo()
{
    static $c = 30;
    $c++;
    echo $c . "<br>";
}


function test()
{
    static $c = 0;
    $c++;  // $c = $c+1;
    echo $c;
}



demo();
demo();
demo();
demo();
demo();

test();
test();
test();
test();


/*$name = "kenny";

function name(){
    global $name;
    echo $name;
}

name();
*/

/*
function test()
{
    $str = 5 + 5;
    $str .= 10 + 10;
    return $str;
}
echo test();*/
//file_put_contents("test.txt", test());

?>