<?php
/**
 * 
 *      可續性 可重複性 穩定性 維護性 可測試性
 *  
 *      注意 在類的成員屬性前面一定要有一個修飾詞
 *      如果不知道要使用時麼修飾詞，可以使用 ｖａｒ　關鍵字
 *      一旦有其他的修飾詞，就不要使用　ｖａｒ
 * 
 *          
 *      構造方法
 *      1. 對象創建完成時自動調用
 *      2. 和類別名稱相同即是構造方法
 *      3. 給對象中的成員賦初值使用
 * 
 * 
 *      魔術方法 __construct()
 * 
 *      加上關鍵字 private 修飾，就不能拿到外部去使用
 *      對象中自己的其他成員可以使用
 * 
 * 
 *      __isset()
 *      __unset()  
 */


class boyfriend
{
    // 變量 (成員屬性) 前面必須要有一個修飾詞
    private $name;
    private $age;
    private $sex;
    private $height;

    // 與類名相同的名稱即是構造方法
    /*function boyfriend($name, $age, $sex = "boy")
    {
        echo $this->name = $name;
        echo $this->age = $age;
        echo $this->sex = $sex;
    }*/

    function __construct($name, $age, $sex = "boy")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    /* function get_age()
    {
        echo $this->age;
    }*/
    // 函數 (成員方法)
    /*private function cook()
    {
        return $this->name . " cook for dinner";
    }*/

    /* function homework()
    {
        return "do homework";
    }
*/

    // 對象回收之前調用
    /*function __destruct()
    {
        echo "goodbye";
    }*/

    function __isset($test)
    {
        echo "isset";
    }
}

$test = new boyfriend('kenny',18,'male');

if (isset($test->name)) {
    echo "good";
}
