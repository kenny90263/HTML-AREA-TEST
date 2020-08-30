<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 00:36:18
  from 'D:\xampp\htdocs\HTML-AREA-TEST\smarty\views\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ad862ca21b3_39392811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1101a7c972326b1cc8d26790e3ba1d92227fe611' => 
    array (
      0 => 'D:\\xampp\\htdocs\\HTML-AREA-TEST\\smarty\\views\\home\\index.tpl',
      1 => 1598740577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ad862ca21b3_39392811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\HTML-AREA-TEST\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'D:\\xampp\\htdocs\\HTML-AREA-TEST\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'D:\\xampp\\htdocs\\HTML-AREA-TEST\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),3=>array('file'=>'D:\\xampp\\htdocs\\HTML-AREA-TEST\\smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),));
?>

<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
<br>
<?php echo strtoupper($_smarty_tpl->tpl_vars['var']->value);?>
<br>
<?php echo ucwords($_smarty_tpl->tpl_vars['var']->value);?>
<br>

------------------<br>

$var | 函數名:參數1:參數2:參數3<br>

<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['var']->value, 'UTF-8');?>
<br>
<?php echo smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['var']->value, 'UTF-8'),5);?>
<br><br>

<?php echo Smarty::SMARTY_VERSION;?>
 smarty版本<br><br>

<?php echo time();?>
 時間搓<br>
<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
<br>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['var2']->value)===null||$tmp==='' ? "這是變數" : $tmp);?>
<br><br>

<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['var']->value,"/\d/","#");?>
<br><br>

<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['var']->value,"@");?>
<br><br>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['var']->value,31,"---",true);?>
<br><br>

<?php echo fontstyle($_smarty_tpl->tpl_vars['var']->value,5,"red");?>
<br><br>

<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mystyle' ][ 0 ], array( $_smarty_tpl->tpl_vars['var']->value,8 ));?>
  註冊變量調解器<br><br><?php }
}
