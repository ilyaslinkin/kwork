<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:09
  from 'C:\OpenServer\domains\kwork\public_html\themes\components\header_funds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40951ec5df0_18691280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735110a6cc46f359670aecae0177b5b568ee1421' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\components\\header_funds.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:utils/currency.tpl' => 1,
  ),
),false)) {
function content_62c40951ec5df0_18691280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),));
?><div class="pull-right droparrow pricebox ml15" style="background: none;"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance" class="color-white font-OpenSans f20 underline-hover js-user-purse_link"><?php $_smarty_tpl->_subTemplateRender("file:utils/currency.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('lang'=>$_smarty_tpl->tpl_vars['actor']->value->lang,'total'=>floor($_smarty_tpl->tpl_vars['actor']->value->totalFunds),'span'=>true), 0, false);
?></a><div class="dropdownbox dropdownbox-balance" style="right:<?php if ($_smarty_tpl->tpl_vars['actor']->value->totalFunds < 10) {?>-30px<?php } elseif ($_smarty_tpl->tpl_vars['actor']->value->totalFunds >= 10 && $_smarty_tpl->tpl_vars['actor']->value->totalFunds < 100) {?>-25px<?php } elseif ($_smarty_tpl->tpl_vars['actor']->value->totalFunds >= 100 && $_smarty_tpl->tpl_vars['actor']->value->totalFunds < 1000) {?>-20px<?php } elseif ($_smarty_tpl->tpl_vars['actor']->value->totalFunds >= 1000 && $_smarty_tpl->tpl_vars['actor']->value->totalFunds < 10000) {?>-15px<?php } elseif ($_smarty_tpl->tpl_vars['actor']->value->totalFunds >= 10000 && $_smarty_tpl->tpl_vars['actor']->value->totalFunds < 100000) {?>-10px<?php } elseif ($_smarty_tpl->tpl_vars['actor']->value->totalFunds >= 100000 && $_smarty_tpl->tpl_vars['actor']->value->totalFunds < 1000000) {?>-5px<?php } else { ?>0px<?php }?>;"><div style="text-align: center; margin-top: 10px;"><div class="green-btn" style="width: 90%;" onclick="toggleBalanceRefillPopup();show_balance_popup('', 'balance');"><?php echo smarty_modifier_t('Пополнить баланс');?>
</div></div></div></div><?php }
}
