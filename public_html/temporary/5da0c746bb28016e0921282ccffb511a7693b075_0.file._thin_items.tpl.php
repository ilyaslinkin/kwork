<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\components\header_menu\_thin_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c409524fc501_86070912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5da0c746bb28016e0921282ccffb511a7693b075' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\components\\header_menu\\_thin_items.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components\\header_menu\\_item.tpl' => 1,
    'file:components\\header_categories_promo_item.tpl' => 1,
    'file:components\\header_categories_more.tpl' => 1,
  ),
),false)) {
function content_62c409524fc501_86070912 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="category-menu__list cat-menu-thin sub-menu-parent"><?php if ((count($_smarty_tpl->tpl_vars['c']->value)-1) <= $_smarty_tpl->tpl_vars['thinMaxParent']->value) {
$_smarty_tpl->_assignInScope('maxParent', $_smarty_tpl->tpl_vars['thinMaxParent']->value ,true);
} else {
$_smarty_tpl->_assignInScope('maxParent', ($_smarty_tpl->tpl_vars['thinMaxParent']->value-1) ,true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'category', false, NULL, 'list', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index'] : null) <= $_smarty_tpl->tpl_vars['maxParent']->value) {
$_smarty_tpl->_subTemplateRender("file:components\header_menu\_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (App::config("promo_page_in_menu")) {
$_smarty_tpl->_subTemplateRender("file:components\header_categories_promo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ((count($_smarty_tpl->tpl_vars['c']->value)-1) > $_smarty_tpl->tpl_vars['thinMaxParent']->value) {
$_smarty_tpl->_subTemplateRender("file:components\header_categories_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('morePosition'=>$_smarty_tpl->tpl_vars['thinMaxParent']->value), 0, false);
}?></ul><?php }
}
