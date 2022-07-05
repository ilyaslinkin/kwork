<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\components\header_inbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c4095216d495_96016129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a14c3137cf9212b4ac50e8fee0dd6bd4467539f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\components\\header_inbox.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4095216d495_96016129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),));
?><div class="js-notice-inbox massage todo ml10" data-active="<?php echo $_smarty_tpl->tpl_vars['unreadDialogCount']->value > 0;?>
">
	<?php if ($_smarty_tpl->tpl_vars['actor']->value->is_available_at_weekends == 1 || ($_smarty_tpl->tpl_vars['actor']->value->is_available_at_weekends == 0 && !Helper::isWeekends())) {?>
		<?php $_smarty_tpl->_assignInScope('warn', "message_counter_warning");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('warn', '');?>
	<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox" class="js-notice__link">
		<?php if ($_smarty_tpl->tpl_vars['unreadDialogCount']->value > 9) {?>
			<div class="massage_counter <?php if ($_smarty_tpl->tpl_vars['warningDialogCount']->value > 0 && App::config("module.inbox_abuse.enable")) {
echo $_smarty_tpl->tpl_vars['warn']->value;
}?>" style="font-size: 10px;">+</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['unreadDialogCount']->value < 1) {?>
			<div class="massage_counter <?php if ($_smarty_tpl->tpl_vars['warningDialogCount']->value > 0 && App::config("module.inbox_abuse.enable")) {
echo $_smarty_tpl->tpl_vars['warn']->value;
}?>" style="display: none"></div>
		<?php } else { ?>
			<div class="massage_counter <?php if ($_smarty_tpl->tpl_vars['warningDialogCount']->value > 0 && App::config('module.inbox_abuse.enable')) {
echo $_smarty_tpl->tpl_vars['warn']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['unreadDialogCount']->value;?>
</div>
		<?php }?>
	</a>
	<?php if ($_smarty_tpl->tpl_vars['actor']->value) {?>
		<div class="block-popup <?php if ($_smarty_tpl->tpl_vars['unreadDialogCount']->value > 0) {?>wating<?php }?>">
			<div class="notifications-content-block">
				<?php if ($_smarty_tpl->tpl_vars['unreadDialogCount']->value == 0) {?>
					<span class="inbox-message-link empty-inbox-data nowrap">
						<?php echo smarty_modifier_t('У Вас пока нет новых сообщений.');?>

					</span>
				<?php } else { ?>
					&nbsp;
				<?php }?>
			</div>
		</div>
	<?php }?>
</div><?php }
}
