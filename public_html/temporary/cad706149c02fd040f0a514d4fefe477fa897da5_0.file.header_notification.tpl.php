<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\components\header_notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c4095209fcd8_21472848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cad706149c02fd040f0a514d4fefe477fa897da5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\components\\header_notification.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4095209fcd8_21472848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),));
?><div class="js-notice-other massage ml10" data-active="<?php echo $_smarty_tpl->tpl_vars['actor']->value->notify_unread_count > 0;?>
">
	<a href="#" class="js-notice__link">
		<?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count > 0) {?>
			<?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count > 9) {?>
				<div class="massage_counter f10 <?php if ($_smarty_tpl->tpl_vars['actor']->value->red_notify && App::config('module.inbox_abuse.enable')) {?>message_counter_warning<?php }?>">+</div>
			<?php } else { ?>
				<div class="massage_counter <?php if ($_smarty_tpl->tpl_vars['actor']->value->red_notify && App::config('module.inbox_abuse.enable')) {?>message_counter_warning<?php }?>"><?php echo $_smarty_tpl->tpl_vars['actor']->value->notify_unread_count;?>
</div>
			<?php }?>
		<?php } else { ?>
			<div class="massage_counter <?php if ($_smarty_tpl->tpl_vars['actor']->value->red_notify && App::config('module.inbox_abuse.enable')) {?>message_counter_warning<?php }?>" style="display: none"></div>
		<?php }?>
	</a>
	<?php if ($_smarty_tpl->tpl_vars['actor']->value) {?>
		<div class="block-popup <?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count > 0) {?>wating<?php }?>">
			<?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count == 0) {?>
				<div id="foxNotifBox_none" class="nowrap">
					<?php echo smarty_modifier_t('У Вас пока нет новых уведомлений.');?>

				</div>
				<?php echo '<script'; ?>
>
					notifyIsLoad = true;
				<?php echo '</script'; ?>
>
			<?php } else { ?>
				&nbsp;
			<?php }?>
		</div>
	<?php }?>
</div><?php }
}
