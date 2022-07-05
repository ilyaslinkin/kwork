<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\_blocks\kwork\kwork_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40952a47f35_68292467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa1de2ae6544218f9d29d24139eba2cfadc9bf87' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\_blocks\\kwork\\kwork_card.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions.tpl' => 1,
    'file:_blocks/thumbnail_img_load.tpl' => 1,
  ),
),false)) {
function content_62c40952a47f35_68292467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),1=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.cdnImageUrl.php','function'=>'smarty_modifier_cdnImageUrl',),2=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.upstring.php','function'=>'smarty_modifier_upstring',),3=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.shortDigit.php','function'=>'smarty_modifier_shortDigit',),4=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\function.route.php','function'=>'smarty_function_route',),));
$_tmp_array = isset($_smarty_tpl->tpl_vars['kwork']) ? $_smarty_tpl->tpl_vars['kwork']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['userRatingCount'] = UserManager::getUserRatingCount($_smarty_tpl->tpl_vars['kwork']->value);
$_smarty_tpl->_assignInScope('kwork', $_tmp_array);
$_smarty_tpl->_subTemplateRender('file:functions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="cusongsblock js-kwork-card cards-layout-item" data-id="<?php echo $_smarty_tpl->tpl_vars['kwork']->value['PID'];?>
"><?php if ($_smarty_tpl->tpl_vars['show_birthday_badges']->value[$_smarty_tpl->tpl_vars['kwork']->value['USERID']]) {?><div class="kwork_birthday_badge tooltipster" data-tooltip-side="top" data-tooltip-text="<?php echo smarty_modifier_t('Я поздравил Kwork с днем рождения. А вы? <nobr>%sПосмотреть поздравления%s</nobr>','<a href=\'/birthday\'>','</a>');?>
"data-tooltip-theme="dark" ><img src="<?php ob_start();
echo Birthday\CardManager::BADGE_ID;
$_prefixVariable6=ob_get_clean();
echo smarty_modifier_cdnImageUrl("/badge/".$_prefixVariable6."s.png");?>
" alt="" /></div><?php }
if ($_smarty_tpl->tpl_vars['kwork']->value['bonus_text'] && $_smarty_tpl->tpl_vars['kwork']->value['bonus_moderate_status'] == 1 && \App::config('promo_show_badges') == 1) {?><div class="kwork_birthday_badge tooltipster" data-tooltip-side="top" data-tooltip-text="Купите этот кворк и участвуйте в<br> <a href='/newyear'>розыгрыше iPhone 8</a>" data-tooltip-theme="dark" ><img src="<?php echo smarty_modifier_cdnImageUrl("/promo/newyear_2018/badges_01.png");?>
" alt="" /></div><?php }
if ($_smarty_tpl->tpl_vars['kwork']->value['bonus_text'] && $_smarty_tpl->tpl_vars['kwork']->value['bonus_moderate_status'] == 1 && \App::config('promo_show_bonus') == 1) {?><div class="cusongsblock_promo">+ <?php echo $_smarty_tpl->tpl_vars['kwork']->value['bonus_text'];?>
</div><?php }?><div class="songperson cusongsblock__content"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['kwork']->value['url'];?>
" class="ispinner-container"><?php $_smarty_tpl->_subTemplateRender("file:_blocks/thumbnail_img_load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('spinnerMode'=>"lite"), 0, false);
if ($_smarty_tpl->tpl_vars['kwork']->value['is_resizing'] == 0) {
$_smarty_tpl->_assignInScope('imageSize', "t4");
} else {
$_smarty_tpl->_assignInScope('imageSize', "t0");
$_smarty_tpl->_assignInScope('sizeImage', \CImage::getSizeImage(((string)$_smarty_tpl->tpl_vars['purl']->value)."/".((string)$_smarty_tpl->tpl_vars['imageSize']->value)."/".((string)$_smarty_tpl->tpl_vars['kwork']->value['photo'])));
if ($_smarty_tpl->tpl_vars['sizeImage']->value['orientation'] == 'landscape' && $_smarty_tpl->tpl_vars['sizeImage']->value['height']/$_smarty_tpl->tpl_vars['sizeImage']->value['width'] < 0.665) {
$_smarty_tpl->_assignInScope('imgClass', "isHorizontalImg");
}
}
ob_start();
echo photoSrcset($_smarty_tpl->tpl_vars['imageSize']->value,$_smarty_tpl->tpl_vars['kwork']->value['photo']);
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('photoSrcset', $_prefixVariable7);
if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value || ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && ($_smarty_tpl->tpl_vars['pageName']->value == "land" || $_smarty_tpl->tpl_vars['pageName']->value == "catalog"))) {?><img src="<?php ob_start();
if ($_smarty_tpl->tpl_vars['pageName']->value == "catalog") {
echo "_transparent";
}
$_prefixVariable8=ob_get_clean();
echo smarty_modifier_cdnImageUrl("/kwork-carousel-blank".$_prefixVariable8.".png");?>
"class="lazy-load_scroll <?php echo $_smarty_tpl->tpl_vars['imgClass']->value;?>
"data-src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['imageSize']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['kwork']->value['photo'];?>
"<?php if ($_smarty_tpl->tpl_vars['photoSrcset']->value) {?> data-<?php echo $_smarty_tpl->tpl_vars['photoSrcset']->value;
}?>alt=""width="230" height="153" onload="removeISpinner(event)"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['imageSize']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['kwork']->value['photo'];?>
"<?php echo $_smarty_tpl->tpl_vars['photoSrcset']->value;?>
alt=""width="230" height="153" class="<?php echo $_smarty_tpl->tpl_vars['imgClass']->value;?>
" onload="removeISpinner(event)"><?php }?></a></div><div class="ta-left padding-content<?php if ($_smarty_tpl->tpl_vars['showStoppedKworks']->value) {?> narrower<?php }?>"><p><a class="multiline-faded" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;
echo $_smarty_tpl->tpl_vars['kwork']->value['url'];?>
"<?php if (strlen($_smarty_tpl->tpl_vars['kwork']->value['gtitle']) > 65) {?> title="<?php echo smarty_modifier_upstring(stripslashes($_smarty_tpl->tpl_vars['kwork']->value['gtitle']));?>
"<?php }?>><span class="first-letter breakwords dib"><?php echo stripslashes($_smarty_tpl->tpl_vars['kwork']->value['gtitle']);?>
</span></a></p><?php if ($_smarty_tpl->tpl_vars['kwork']->value['is_popular'] >= KworkManager::BEST_RATING) {?><div class="cusongsblock-toprated m-hidden clearfix"><div class="toprated-inner-white"><span class="fox-express"><?php echo smarty_modifier_t('Популярный');?>
</span></div></div><?php }?><div class="cusongsblock__panel"><div class="pull-left cusongsblock-panel__user-name m-hidden oneline-faded w120"><?php if ($_smarty_tpl->tpl_vars['is_online']->value[$_smarty_tpl->tpl_vars['kwork']->value['USERID']]) {?><i class="dot-user-status dot-user-online"></i><?php } else { ?><i class="dot-user-status dot-user-offline"></i><?php }?> <a class="dark-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['kwork']->value['username'])),$_smarty_tpl);?>" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['kwork']->value['username']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['kwork']->value['username']);?>
</a></div><div class="pull-right cusongsblock-panel__rating m-pull-reset"><ul class="rating-block cusongsblock-panel__rating-list dib"><?php if ($_smarty_tpl->tpl_vars['kwork']->value['userRating'] > 0) {?><li class="mr2 v-align-m"><i class="fa fa-star gold" aria-hidden="true"></i> </li><li class="rating-block__rating-item--number fw600 v-align-m"><?php echo number_format(round($_smarty_tpl->tpl_vars['kwork']->value['userRating']/20,1),1,".",'');?>
</li><?php } elseif ($_smarty_tpl->tpl_vars['kwork']->value['userRatingCount'] > 0) {?><li class="rating-block__rating-item--new"><?php echo smarty_modifier_t('Новый');?>
</li><?php }?></ul><?php if ($_smarty_tpl->tpl_vars['kwork']->value['userRatingCount'] > 0) {?><span class="rating-block__count">(<?php echo smarty_modifier_shortDigit($_smarty_tpl->tpl_vars['kwork']->value['userRatingCount']);?>
)</span><?php }?></div><div class="clear"></div></div><div class="userdata clearfix"><?php if ($_smarty_tpl->tpl_vars['showStoppedKworks']->value) {?><div class="ta-center mt2"><form method="post" name="sendNotice<?php echo $_smarty_tpl->tpl_vars['kwork']->value['PID'];?>
"action="<?php echo smarty_function_route(array('route'=>"notify_activate_kwork"),$_smarty_tpl);?>
"><input type="hidden" name="kworkId" value="<?php echo $_smarty_tpl->tpl_vars['kwork']->value['PID'];?>
"></form><button class="white-btn green-btn lh24 mt-1" onclick="document.sendNotice<?php echo $_smarty_tpl->tpl_vars['kwork']->value['PID'];?>
.submit();" style="width:100%"><?php echo smarty_modifier_t('Отправить уведомление');?>
</button></div><?php } else { ?><div class="otherdetails pull-left m-hidden w50"><div class="price pull-left m-pull-right"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'kwork_price', array('kwork'=>$_smarty_tpl->tpl_vars['kwork']->value,'actor'=>$_smarty_tpl->tpl_vars['actor']->value,'filterPrice'=>$_smarty_tpl->tpl_vars['filterPrice']->value), true);?>
</div></div><div class="pull-left cusongsblock-panel__user-name m-visible <?php if ($_smarty_tpl->tpl_vars['kwork']->value['rating'] < KworkManager::BEST_RATING) {?> w50p <?php }?>"><?php if ($_smarty_tpl->tpl_vars['is_online']->value[$_smarty_tpl->tpl_vars['kwork']->value['USERID']]) {?><i class="dot-user-status dot-user-online"></i><?php } else { ?><i class="dot-user-status dot-user-offline"></i><?php }?>&nbsp;<a class="dark-link dib v-align-m oneline-faded <?php if ($_smarty_tpl->tpl_vars['kwork']->value['rating'] >= KworkManager::BEST_RATING) {?> w100<?php } else { ?> w90p <?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['kwork']->value['username'])),$_smarty_tpl);?>" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['kwork']->value['username']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['kwork']->value['username']);?>
</a></div><?php }?></div></div></div>
<?php }
}
