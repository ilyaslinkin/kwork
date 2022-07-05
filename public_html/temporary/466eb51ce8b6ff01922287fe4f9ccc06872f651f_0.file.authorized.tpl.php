<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\index\authorized.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c4095265c1d6_34458671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '466eb51ce8b6ff01922287fe4f9ccc06872f651f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\index\\authorized.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user_avatar.tpl' => 1,
    'file:utils/currency.tpl' => 1,
    'file:fox_bit.tpl' => 1,
    'file:index/statistics.tpl' => 1,
  ),
),false)) {
function content_62c4095265c1d6_34458671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),1=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),2=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\function.control.php','function'=>'smarty_function_control',),));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/authorized.js"));?>

<?php echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/dist/index.css"),"all");?>



<div id="app">
	<div class="banner">
		<div class="centerwrap relative">
			<div class="headertext">
				<h1 class="f34 fw600"><?php echo smarty_modifier_t('Kwork – магазин и биржа фриланс-услуг');?>
</h1>
				<span class="headertext_subtitle headertext_subtitle_authorized">
					<?php echo smarty_modifier_t('Десятки тысяч услуг, скорость и качество исполнения');?>

				</span>
				<div class="find-service m-hidden">
					<general-search-index></general-search-index>
					<?php if ($_smarty_tpl->tpl_vars['popular_cat']->value) {?>
						<div class="font-OpenSans mt5 example-search-link m-text-center">
							<?php echo smarty_modifier_t('Например:');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['catalog']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['popular_cat']->value['seo'];?>
"><?php echo smarty_modifier_t($_smarty_tpl->tpl_vars['popular_cat']->value['name']);?>
</a>
						</div>
					<?php }?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/dist/index.js"));?>


<?php if ($_smarty_tpl->tpl_vars['wantsCount']->value > 0) {?>
<div class="lg-centerwrap centerwrap main-wrap m-m0 ovf-h">
	<h1 class="t-align-c m-fs22"><?php echo smarty_modifier_t('Интересное на бирже');?>
</h1>
	<p class="t-align-c mb25"><?php echo smarty_modifier_t('Изучите проекты на бирже, оставьте свое предложение и получите заказ.');?>
</p>
	<table class="table-style w750 m-wMax">
		<thead>
		<tr>
			<td class="w40p fw700">
				<span class="pl10 color-text"><?php echo smarty_modifier_t('Проект');?>
</span>
			</td>
			<td class="w18p fw700">
				<span class="color-text"><?php echo smarty_modifier_t('Покупатель');?>
</span>
			</td>
			<td class="w5p fw700 ta-center">
				<span class="color-text"><?php echo smarty_modifier_t('Цена');?>
</span>
			</td>
		</tr>
		</thead>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wants']->value, 'want');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['want']->value) {
?>
			<tr>
				<td class="pt-pb-8">
					<div class="ml10">
						<a class="link-color dib first-letter" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_offer?project=<?php echo $_smarty_tpl->tpl_vars['want']->value->id;?>
">
							<?php echo stripslashes($_smarty_tpl->tpl_vars['want']->value->name);?>

						</a>
						<div class="f12 mt5"><?php echo $_smarty_tpl->tpl_vars['want']->value->category->parentCategory->name;?>
 > <?php echo $_smarty_tpl->tpl_vars['want']->value->category->name;?>
</div>
					</div>
				</td>
				<td class="pt-pb-8">
					<div class="d-flex align-items-center">
						<?php $_smarty_tpl->_subTemplateRender("file:user_avatar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profilepicture'=>$_smarty_tpl->tpl_vars['want']->value->user->profilepicture,'username'=>$_smarty_tpl->tpl_vars['want']->value->user->username,'size'=>"small",'class'=>"user-avatar-image s22 flex-1-0-100 m-hidden mr5"), 0, true);
?>
						<a class="link-color word-break-all" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['want']->value->user->username)),$_smarty_tpl);?>">
							<?php echo stripslashes($_smarty_tpl->tpl_vars['want']->value->user->username);?>

						</a>
					</div>
				</td>
				<td class="ta-center pt-pb-8 fw600 nowrap">
					<?php if ($_smarty_tpl->tpl_vars['want']->value->price_limit > 0) {?>
					<a class="colorGreen f16" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_offer?project=<?php echo $_smarty_tpl->tpl_vars['want']->value->id;?>
">
						<?php $_smarty_tpl->_subTemplateRender("file:utils/currency.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>$_smarty_tpl->tpl_vars['want']->value->price_limit,'lang'=>$_smarty_tpl->tpl_vars['want']->value->lang), 0, true);
?>
					</a>
					<?php }?>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
	<div class="mb20">
		<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/projects" class="mt20 hugeGreenBtn GreenBtnStyle h50 pull-reset mw300px mAuto m-wMax">
			<?php echo smarty_modifier_t('Перейти на биржу');?>

		</a>
	</div>
</div>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['kworks']->value) >= 1) {?>
	<?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['isTablet']->value && !$_smarty_tpl->tpl_vars['onlyDesktopVersion']->value) {?>
		<div class="lg-centerwrap centerwrap m-m0 authorized-kwork-block authorized-kwork-block__popular clearfix">
			<h1 class="t-align-c pt15 m-fs22"><?php echo smarty_modifier_t('Популярные кворки');?>
</h1>
			<div class="cusongs">
				<div class="cusongslist cusongslist_5_column pb0 cusongslist-authorized-popular authorized-popular-rest-hidden">
					<?php $_smarty_tpl->_subTemplateRender("file:fox_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('posts'=>$_smarty_tpl->tpl_vars['kworks']->value), 0, false);
?>
				</div>
			</div>
			<div class="pull-right semibold fs16">
				<div class="preloader_rest_popular">
					<div class="preloader__ico prealoder__ico_rest_popular pull-left"></div>
				</div>
				<a href="javascript:void(0);" class="js-authorized-load-popular" data-loaded="0" data-weight-minute="<?php echo $_smarty_tpl->tpl_vars['weightMinute']->value;?>
"><?php echo smarty_modifier_t('Смотреть все');?>
</a>
			</div>
		</div>
	<?php } else { ?>
		<div class="lg-centerwrap centerwrap main-wrap m-m0 authorized-kwork-block clearfix">
			<h1 class="t-align-c m-fs22"><?php echo smarty_modifier_t('Популярные кворки');?>
</h1>
			<?php echo smarty_function_control(array('name'=>"_blocks/kwork/carousel_kwork",'kworks'=>$_smarty_tpl->tpl_vars['kworks']->value,'carouselName'=>"popular",'kworkLoadCategory'=>3),$_smarty_tpl);?>

		</div>
	<?php }
}?>

<div class="bgWhite pt20 m-hidden">
	<?php $_smarty_tpl->_subTemplateRender("file:index/statistics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="m-hidden bgWhite pt20">
	<div class="lg-centerwrap centerwrap">
		<hr class="m0 gray">
	</div>
</div>
<?php }
}
