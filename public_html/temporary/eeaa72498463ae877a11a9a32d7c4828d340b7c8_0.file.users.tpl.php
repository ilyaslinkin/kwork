<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:09
  from 'C:\OpenServer\domains\kwork\public_html\themes\config\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c409511947a4_39286716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeaa72498463ae877a11a9a32d7c4828d340b7c8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\config\\users.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c409511947a4_39286716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\function.to_js.php','function'=>'smarty_function_to_js',),));
if (!$_smarty_tpl->tpl_vars['config']->value["users"]) {?>
	<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['config']) ? $_smarty_tpl->tpl_vars['config']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["users"] = array("profilePicUrl"=>App::config("membersprofilepicurl"));
$_smarty_tpl->_assignInScope('config', $_tmp_array ,false ,8);
}
echo '<script'; ?>
>
	<?php echo smarty_function_to_js(array('name'=>"config.users",'var'=>$_smarty_tpl->tpl_vars['config']->value['users']),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['userAvatarColors']->value) {
echo smarty_function_to_js(array('name'=>"userAvatarColors",'var'=>$_smarty_tpl->tpl_vars['userAvatarColors']->value),$_smarty_tpl);
}
echo '</script'; ?>
><?php }
}
