<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:08
  from 'C:\OpenServer\domains\kwork\public_html\themes\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40950770723_51967050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b19c9f4f4f552afd30e73f73ab6586d06ecf84' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\index.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:index/authorized.tpl' => 1,
    'file:index/unauthorized.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62c40950770723_51967050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['actor']->value) {?>		<?php echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/pages/index.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.kworkcarousel.min.js"));
}
if ($_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->_subTemplateRender("file:index/authorized.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
$_smarty_tpl->_subTemplateRender("file:index/unauthorized.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
