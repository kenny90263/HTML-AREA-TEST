<?php

/**
 * 
 *  超全局變量，在 PHP 腳本中，已經聲明完的變量
 * 
 * 1.$_SERVER
 * 2.$_ENV
 * 3.$_GET
 * 4.$_POST
 * 5.$_REQUEST
 * 6.$_FILES
 * 7.$_COOKIE
 * 8.$_SESSION
 * 9.$GLOBALS
 * 
 * 
 *  1.數組(關聯數組)，就和自己聲明的數組是一樣的操作方式
 *  2.全局
 *  3.每一個超全局數組都有自獨特能力
 *  
 * 
 *  $_GET 接收用戶通過 URL 向服務器傳的參數 get
 *  $_POST 接收用戶透過 http 協議向服務器傳的參數 http post
 *  $_REQUEST  
 * 
 */
?>

<?php
/*
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";*/
/*
session_start();
$_SESSION['name'] = "kenny";
print_r($_SESSION);
*/
/*
setcookie(
    "name",
    "kenny",
    time() + 3600,
    "/"
);
print_r($_COOKIE);
*/
?>
<!--<a href="global.php?action=add&id=5&name=admin">click</a>

<form action="" method="post">
    username: <input type="text" name="name">
    age: <input type="text" name="age">
    sex: <input type="text" name="sex">
    <input type="submit">
</form>
-->

<?php
//print_r($_REQUEST);
//print_r($_POST);
//print_r($_GET);
?>
<?php 
// user agent
//echo $_SERVER['HTTP_USER_AGENT']."<br>";
// user IP
//echo $_SERVER['REMOTE_ADDR']."<br>";
/*
$arr = array("mother","fucker");
function demo(){
    global $arr;
    echo $arr[0].$arr[1];
}
demo();
*/
// 有多少元素
//echo count($_SERVER);

/*
foreach($_SERVER as $key => $value){
    echo $key ."  ->  ".$value."<br>";
}
*/
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/