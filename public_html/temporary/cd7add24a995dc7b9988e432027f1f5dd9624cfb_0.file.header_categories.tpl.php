<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\components\header_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40952472fe7_41122162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7add24a995dc7b9988e432027f1f5dd9624cfb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\components\\header_categories.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components\\header_menu\\_thin_items.tpl' => 1,
    'file:components\\header_menu\\_wide_items.tpl' => 1,
    'file:components\\header_categories_colored_navs.tpl' => 2,
  ),
),false)) {
function content_62c40952472fe7_41122162 (Smarty_Internal_Template $_smarty_tpl) {
if (App::config("promo_page_in_menu")) {
$_smarty_tpl->_assignInScope('wideMaxParent', 7);
$_smarty_tpl->_assignInScope('thinMaxParent', 6);
} else {
$_smarty_tpl->_assignInScope('wideMaxParent', 8);
$_smarty_tpl->_assignInScope('thinMaxParent', 7);
}
$_smarty_tpl->assign('c' , insert_get_header_menu (array(),$_smarty_tpl), true);
if (!App::config("category.color_view")) {?><div class="subnav"><div class="centerwrap lg-centerwrap category-menu"><?php $_smarty_tpl->_subTemplateRender("file:components\header_menu\_thin_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:components\header_menu\_wide_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></div><?php } else { ?><div class="subnav"><div class="centerwrap lg-centerwrap category-menu category-menu__bg"><ul class="category-menu__list cat-menu-thin sub-menu-parent"><?php $_smarty_tpl->_subTemplateRender("file:components\header_categories_colored_navs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentMaxParent'=>$_smarty_tpl->tpl_vars['thinMaxParent']->value), 0, false);
?></ul><ul class="category-menu__list cat-menu-wide sub-menu-parent category-menu__bg"><?php $_smarty_tpl->_subTemplateRender("file:components\header_categories_colored_navs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentMaxParent'=>$_smarty_tpl->tpl_vars['wideMaxParent']->value), 0, true);
?></ul></div></div><?php }
}
}
