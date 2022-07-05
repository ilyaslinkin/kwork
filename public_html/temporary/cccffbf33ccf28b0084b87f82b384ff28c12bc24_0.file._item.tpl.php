<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\components\header_menu\_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c409525527d9_62484725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cccffbf33ccf28b0084b87f82b384ff28c12bc24' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\components\\header_menu\\_item.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components\\header_categories_subnav_block.tpl' => 1,
  ),
),false)) {
function content_62c409525527d9_62484725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),));
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes(mb_strtolower($_smarty_tpl->tpl_vars['category']->value->seo, 'UTF-8'));?>
"class="category-menu__list_item"><?php echo stripslashes(smarty_modifier_t($_smarty_tpl->tpl_vars['category']->value->name));?>
</a><?php if (count($_smarty_tpl->tpl_vars['category']->value->cats) > 0) {?><div class="menubox"><div class="menulist <?php if ($_smarty_tpl->tpl_vars['thinMaxParent']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index'] : null) > ($_smarty_tpl->tpl_vars['thinMaxParent']->value/2)) {?>last<?php }?>"><div class="menutitle"><?php echo stripslashes(smarty_modifier_t($_smarty_tpl->tpl_vars['category']->value->name));?>
</div><?php $_smarty_tpl->_subTemplateRender("file:components\header_categories_subnav_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('catArr'=>$_smarty_tpl->tpl_vars['category']->value->cats,'leftCatArray'=>$_smarty_tpl->tpl_vars['category']->value->wideLeftCatArray,'rightCatArray'=>$_smarty_tpl->tpl_vars['category']->value->wideRightCatArray), 0, false);
?></div></div><?php }?></li><?php }
}
