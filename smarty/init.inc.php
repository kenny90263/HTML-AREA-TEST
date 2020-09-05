<?php

/**
 * 
 *  初始化文件
 * 
 */

// Get root path
define("ROOT", __DIR__);

include "libs/Smarty.class.php";

$smarty = new Smarty;

$smarty->setTemplateDir(ROOT . "/views/");
$smarty->setCompileDir(ROOT . "/comps/");

// 添加一個插件的目錄
//$smarty -> setPluginsDir(ROOT."/myplugins/");

// 讓定界符號使用空格
$smarty->auto_literal = false;

// 設置定界符號
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
