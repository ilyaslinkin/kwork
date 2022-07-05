<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\_blocks\kwork\carousel_kwork.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40952956453_06707540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd05642bd17263db5ae0a9d34485cf11d1bfada2a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\_blocks\\kwork\\carousel_kwork.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_blocks/kwork/kwork_card.tpl' => 1,
  ),
),false)) {
function content_62c40952956453_06707540 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['kworks']->value) {
$_smarty_tpl->assign('is_online' , insert_is_online_from_array (array('value' => 'a', 'posts' => $_smarty_tpl->tpl_vars['kworks']->value),$_smarty_tpl), true);?><div class="kwork-carousel kwork-card-data-wrap" data-kwork-load-category="<?php echo $_smarty_tpl->tpl_vars['kworkLoadCategory']->value;?>
" data-carousel-name="<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
"><div class="js-kwork-carousel-container-<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
 <?php if (count($_smarty_tpl->tpl_vars['kworks']->value) < 5) {?>kwork-carousel__container_flex<?php }?> kwork-carousel__container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kworks']->value, 'kwork', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['kwork']->value) {
if ($_smarty_tpl->tpl_vars['k']->value == 3 && $_smarty_tpl->tpl_vars['pageName']->value == "cat" && $_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {
break 1;
}
$_smarty_tpl->_subTemplateRender('file:_blocks/kwork/kwork_card.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_online'=>$_smarty_tpl->tpl_vars['is_online']->value,'kwork'=>$_smarty_tpl->tpl_vars['kwork']->value,'user_kwork_marks'=>$_smarty_tpl->tpl_vars['user_kwork_marks']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php echo '<script'; ?>
>			
			window.addEventListener('DOMContentLoaded', function() {
				if (!window.carousel) {
					window.carousel = {};
				}

				jQuery('.kwork-carousel[data-carousel-name="<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
"] .cusongsblock').each(function() {
					var kworkId = jQuery(this).data('id');
					if (!window.carousel['<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
']) {
						window.carousel['<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
'] = [];
					}
					if (kworkId) {
						window.carousel['<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
'].push(kworkId);
					}
				});

				var responsiveDots = {
					768: {items: 2},
					860: {items: 3},
					1110: {items: 4},
					1350: {items: 5}
				};


				if (jQuery('.all_page').hasClass('is_index')) {
					responsiveDots[320] = {items: 1};
					responsiveDots[550] = {items: 2};
				}
				jQuery('.js-kwork-carousel-container-<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
').kworkCarousel({
					margin: 0,
					staticFirst: true,
					items: 9999999,
					responsive: responsiveDots
				});
			});
			<?php echo '</script'; ?>
><?php }
}
}
