<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:11
  from 'C:\OpenServer\domains\kwork\public_html\themes\footer_base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40953259ce0_94944403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbec6fa6ca5b3cc9752d7d9a1c27211d3f4f38ac' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\footer_base.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c40953259ce0_94944403 (Smarty_Internal_Template $_smarty_tpl) {
echo Helper::printJsFiles();
echo Helper::printCssFiles();
if ($_smarty_tpl->tpl_vars['controlEnLang']->value) {
echo '<script'; ?>
>window.addEventListener('DOMContentLoaded', function() {$('.control-en').on('input', (e) => e.target.value = e.target.value.replace(/[А-Яа-яЁё]/g, ''));});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['refIframe']->value) {?><iframe id="iframe_ref" src="<?php echo $_smarty_tpl->tpl_vars['refIframe']->value;?>
" width="0" height="0" align="left"></iframe><?php }
if ($_smarty_tpl->tpl_vars['authHash']->value && $_smarty_tpl->tpl_vars['authBaseurls']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authBaseurls']->value, 'authBaseurl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['authBaseurl']->value) {
?><iframe id="iframe_auth" src="<?php echo $_smarty_tpl->tpl_vars['authBaseurl']->value;?>
/setcookie?auth_hash=<?php echo $_smarty_tpl->tpl_vars['authHash']->value;?>
" width="0" height="0" align="left"></iframe><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></body></html><?php }
}
