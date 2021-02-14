<?php
// test output
$outputArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
$output = "Test Text Ha ha<br>";


echo $output;
echo "$output";
print_r($output);
echo count($outputArray) . "<br>";


$number = 200;
echo sprintf("%f", $number)."<br><br><br><br><br>";

$str1 = "Hello";
$str2 = "Hello world!";

echo sprintf("[%s]", $str1) . "<br>";
echo sprintf("[%8s]", $str1) . "<br>";
echo sprintf("[%-8s]", $str1) . "<br>";
echo sprintf("[%08s]", $str1) . "<br>";
echo sprintf("[%'*8s]", $str1) . "<br>";
echo sprintf("[%8.8s]", $str2) . "<br>";

echo "<br><br><br><br><br>";
// return test
function returntest(){
    return 123;
}
echo returntest();

function test(){
    echo 123;
}
test();
