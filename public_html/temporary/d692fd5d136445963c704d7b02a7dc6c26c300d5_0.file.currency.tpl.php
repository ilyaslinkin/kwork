<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:11
  from 'C:\OpenServer\domains\kwork\public_html\themes\utils\currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40953926d78_48794379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd692fd5d136445963c704d7b02a7dc6c26c300d5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\utils\\currency.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c40953926d78_48794379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.zero.php','function'=>'smarty_modifier_zero',),));
if ($_smarty_tpl->tpl_vars['currencyId']->value == \Model\CurrencyModel::USD || $_smarty_tpl->tpl_vars['lang']->value == Translations::EN_LANG) {?><span>$</span><?php }
if (isset($_smarty_tpl->tpl_vars['total']->value)) {
if ($_smarty_tpl->tpl_vars['span']->value) {?><span class="funds"><?php }
echo smarty_modifier_zero($_smarty_tpl->tpl_vars['total']->value);
if ($_smarty_tpl->tpl_vars['span']->value) {?></span><?php }
}
if ($_smarty_tpl->tpl_vars['currencyId']->value == \Model\CurrencyModel::RUB || $_smarty_tpl->tpl_vars['lang']->value == Translations::DEFAULT_LANG) {?>&nbsp;<span class="rouble">Р</span><?php }
}
}
