<?php

include "init.inc.php";


$var = "this is a demo this is8 a demo 我是天才";

$smarty->assign("var", $var);



function fontstyle($str,$fontsize="3",$fontcolor="pink"){
    return '<font color="'.$fontcolor.'" size="'.$fontsize.'">'.$str.'</font>';
}


$smarty->registerPlugin("modifier","mystyle","fontstyle");









$smarty->display("home/index.tpl");







/*$smarty->assign(array(
    "title"   => "1111111",
    "author"   => "2222222",
    "content"   => "this is content."
));


class Person
{
    public $name = "kenny";
    public $sex = "male";

    public function say()
    {
        echo "this is {$this->name} and {$this->sex}";
    }

    public function eat()
    {
        echo "good very";
     
    }
}
*/
/*$smarty->assign("kenny", new Person());

$smarty->display("home/index.tpl");
*/