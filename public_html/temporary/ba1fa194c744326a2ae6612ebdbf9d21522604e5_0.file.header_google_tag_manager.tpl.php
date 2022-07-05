<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:09
  from 'C:\OpenServer\domains\kwork\public_html\themes\header_google_tag_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c4095144ff28_96210886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1fa194c744326a2ae6612ebdbf9d21522604e5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\header_google_tag_manager.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4095144ff28_96210886 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['appMode']->value == "stage") {?>
	
		<!-- Google Tag Manager (noscript) -->
		<noscript>
	
	<?php if (Translations::isDefaultLang()) {?>
		
			<iframe src="//www.googletagmanager.com/ns.html?id=GTM-KJSMMH" height="0" width="0"	style="display:none;visibility:hidden"></iframe>
		
	<?php } else { ?>
		
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZXSF2S" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		
	<?php }?>
	
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
	
<?php }
}
}
