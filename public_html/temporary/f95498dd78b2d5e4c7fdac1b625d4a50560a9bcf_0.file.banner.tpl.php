<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:43:30
  from 'C:\OpenServer\domains\kwork\public_html\themes\promo\_blocks\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c407c2e21603_54722723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f95498dd78b2d5e4c7fdac1b625d4a50560a9bcf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\promo\\_blocks\\banner.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c407c2e21603_54722723 (Smarty_Internal_Template $_smarty_tpl) {
if (false && PromoBlackfridayManager::isPageShow() && Translations::getLang() == Translations::DEFAULT_LANG) {?>
	<div class="lg-centerwrap centerwrap main-wrap m-m0 ovf-h">
		<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/blackfriday" class="promo_blackfriday__banner"></a>
	</div>
<?php }
}
}
