<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:09
  from 'C:\OpenServer\domains\kwork\public_html\themes\header_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40951be3bb6_14848399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5109c63b64547ffd3c49937348104d108af6a1e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\header_profile.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user_avatar.tpl' => 1,
    'file:contest/contest_2019_case_menu_link.tpl' => 2,
  ),
),false)) {
function content_62c40951be3bb6_14848399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),1=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.tn.php','function'=>'smarty_modifier_tn',),));
?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['actor']->value->username, 'UTF-8');?>
" class="dib v-align-m w60"><?php $_smarty_tpl->_subTemplateRender("file:user_avatar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profilepicture'=>$_smarty_tpl->tpl_vars['actor']->value->profilepicture,'username'=>$_smarty_tpl->tpl_vars['actor']->value->username,'size'=>"big",'class'=>"s60"), 0, false);
?></a><div class="dib v-align-m pull-reset ml10 w172 lh20 mt-7"><div><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['actor']->value->username, 'UTF-8');?>
"class="color-text font-OpenSans dropdownbox_username"><?php echo $_smarty_tpl->tpl_vars['actor']->value->username;?>
</a></div><div><span id="usertypelabel2" class="f14 color-lightGray dib"><?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {
echo smarty_modifier_t('Покупатель');
} elseif ($_smarty_tpl->tpl_vars['actor']->value->type == 'worker') {
echo smarty_modifier_t('Продавец');
}?></span></div><?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'worker' && $_smarty_tpl->tpl_vars['actor']->value->worker_status && $_smarty_tpl->tpl_vars['actor']->value->worker_status != \UserManager::WORKER_STATUS_NONE) {?><div class="position-r"><a href="javascript:;" class="dib underline-hover worker-status-<?php echo $_smarty_tpl->tpl_vars['actor']->value->worker_status;?>
 js-worker-status js-worker-status-switch js-worker-status-switch-container" data-status="<?php echo $_smarty_tpl->tpl_vars['actor']->value->worker_status;?>
" data-check-offers="true" title="<?php echo smarty_modifier_t('Изменить статус');?>
"><?php if ($_smarty_tpl->tpl_vars['actor']->value->worker_status == \UserManager::WORKER_STATUS_FREE) {
echo smarty_modifier_t('Принимаю заказы');
}
if ($_smarty_tpl->tpl_vars['actor']->value->worker_status == \UserManager::WORKER_STATUS_BUSY) {
echo smarty_modifier_t('Занят');
}?></a><span class="kwork-icon icon-custom-help tooltipster ml5 <?php if ($_smarty_tpl->tpl_vars['actor']->value->worker_status == \UserManager::WORKER_STATUS_FREE) {?>hidden<?php }?>"data-tooltip-side="bottom"data-tooltip-theme="light"data-tooltip-interactive="false"data-tooltip-text="<?php echo smarty_modifier_t('<p>Кворки остановлены, заказы не поступают.</p><p><b>Внимание!</b><br /> Когда будете готовы выполнять услуги, включите статус «Принимаю заказы», и активные кворки снова станут доступны в каталоге.</p>');?>
"></span><span class="kwork-icon icon-custom-help tooltipster ml5 <?php if ($_smarty_tpl->tpl_vars['actor']->value->worker_status == \UserManager::WORKER_STATUS_BUSY) {?>hidden<?php }?>"data-tooltip-side="bottom"data-tooltip-theme="light"data-tooltip-interactive="false"data-tooltip-text="<?php echo smarty_modifier_t('<p>Есть активные кворки, заказы принимаются.</p><p><b>Внимание!</b><br /> Отказ от заказа из-за занятости снижает рейтинг продавца. Если вы не готовы принимать новые заказы, установите статус «Занят».</p>');?>
"></span></div><?php }?></div><div class="select-user-type select-user-type_small mt15 mb10"><input name="userType" onclick="changeUserType(1, true);" type="radio" id="1" value="1"<?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {?>checked<?php }?>><label for="1" class="select-user-type_customer select-user-type-js"><?php echo smarty_modifier_t('Покупатель');?>
</label><input name="userType" onclick="changeUserType(2, true);" type="radio" id="2" value="2"<?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'worker') {?>checked<?php }?>><label for="2" class="select-user-type_performer select-user-type-js"><?php echo smarty_modifier_t('Продавец');?>
</label></div><ul class="user-menu-payer" <?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'worker') {?>style="display:none"<?php }?>><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders" class="has-orders-count-as-payer"><?php echo smarty_modifier_t('Мои заказы');?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_projects" class="js-has-wants-count-as-payer"><?php echo smarty_modifier_t('Биржа');?>
</a></li><?php if (false && PromoBlackfridayManager::isPageShow() && Translations::getLang() == Translations::DEFAULT_LANG) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/blackfriday"><?php echo smarty_modifier_t('Акция "Черная пятница"');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['show2019CaseContestLink']->value) {
$_smarty_tpl->_subTemplateRender("file:contest/contest_2019_case_menu_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['actor']->value && $_smarty_tpl->tpl_vars['actor']->value->show_poll_notify && $_smarty_tpl->tpl_vars['canonicalUrl']->value != ($_smarty_tpl->tpl_vars['baseurl']->value).('/poll')) {?><li class="user-menu-payer__poll"><i class="icon ico-warningSmall poll-ico-warning"></i><a class="poll-warning-menu-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/poll?hash=<?php echo $_smarty_tpl->tpl_vars['actor']->value->pollHash;?>
&type=menu"><?php echo smarty_modifier_t('Оставьте мнение о Kwork');?>
</a></li><?php }
if (false) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/prize_exchange"><b><?php echo smarty_modifier_t('Выиграй iPhone');?>
</b></a></li><?php }?></ul><ul class="user-menu-worker" <?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {?>style="display:none"<?php }?>><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_kworks"><?php echo smarty_modifier_t('Мои кворки');?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders" class="has-orders-count-as-worker"><?php echo smarty_modifier_t('Заказы');?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/projects"><?php echo smarty_modifier_t('Биржа');?>
</a> <span class="italic f12 color-link-gray"><?php ob_start();
echo WantManager::getNewWantsCount();
$_prefixVariable4 = ob_get_clean();
ob_start();
echo WantManager::getNewWantsCount();
$_prefixVariable5 = ob_get_clean();
echo smarty_modifier_tn('+%s проектов за сутки',$_prefixVariable4,$_prefixVariable5);?>
</span></li>		<?php if (false && \UserManager::isLanguageTester($_smarty_tpl->tpl_vars['actor']->value->USERID) && Translations::getLang() == Translations::DEFAULT_LANG) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/prize">Розыгрыш iPhone 8<?php if (\Contest\Contests\Contest2018PrizeManager::userSeePrizePage() != true) {?><div class="round-sign">!</div><?php }?></a></li><?php }?>        <?php if ($_smarty_tpl->tpl_vars['actor']->value->analytics_enable) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/analytics" class="active"><?php echo smarty_modifier_t('Аналитика продаж');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['show2019CaseContestLink']->value) {
$_smarty_tpl->_subTemplateRender("file:contest/contest_2019_case_menu_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (false) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/prize_exchange"><b><?php echo smarty_modifier_t('Выиграй iPhone');?>
</b></a></li><?php }?></ul><ul><?php if ($_smarty_tpl->tpl_vars['actor']->value && ($_smarty_tpl->tpl_vars['actor']->value->role == "moder" || $_smarty_tpl->tpl_vars['actor']->value->role == "admin")) {
$_smarty_tpl->_assignInScope('countModerKwork', ModerManager::getRedisKworkCountOnModer());?><li><a class="<?php if ($_smarty_tpl->tpl_vars['countModerKwork']->value > 100) {?>color-red<?php }?>"href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/moder_kwork"><?php echo smarty_modifier_t('Модерация');?>
 <?php if ($_smarty_tpl->tpl_vars['countModerKwork']->value) {?>(<?php echo $_smarty_tpl->tpl_vars['countModerKwork']->value;?>
)<?php }?></a></li><?php }?><li class="divider"></li>		<li><a href="/logout"><?php echo smarty_modifier_t('Выход');?>
</a></li></ul><?php }
}
