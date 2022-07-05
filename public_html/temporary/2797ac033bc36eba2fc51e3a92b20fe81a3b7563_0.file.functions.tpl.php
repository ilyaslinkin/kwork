<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\functions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40952cca396_49866479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2797ac033bc36eba2fc51e3a92b20fe81a3b7563' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\functions.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c40952cca396_49866479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'kwork_price' => 
  array (
    'compiled_filepath' => 'C:\\OpenServer\\domains\\kwork\\public_html\\temporary\\2797ac033bc36eba2fc51e3a92b20fe81a3b7563_0.file.functions.tpl.php',
    'uid' => '2797ac033bc36eba2fc51e3a92b20fe81a3b7563',
    'call_name' => 'smarty_template_function_kwork_price_51208058462c40952cc1455_41028783',
  ),
));
}
/* smarty_template_function_kwork_price_51208058462c40952cc1455_41028783 */
if (!function_exists('smarty_template_function_kwork_price_51208058462c40952cc1455_41028783')) {
function smarty_template_function_kwork_price_51208058462c40952cc1455_41028783(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('kwork'=>0,'actor'=>0,'filterPrice'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.zero.php','function'=>'smarty_modifier_zero',),));
$_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['kwork']->value['price']);
echo smarty_modifier_zero($_smarty_tpl->tpl_vars['price']->value);?>
<span class="rouble">Р</span><?php
}}
/*/ smarty_template_function_kwork_price_51208058462c40952cc1455_41028783 */
}
