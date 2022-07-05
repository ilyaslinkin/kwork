<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:09
  from 'C:\OpenServer\domains\kwork\public_html\themes\user_avatar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40951855896_26607118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9c9ffd93b8119f6ae5f15799684ad776a65332' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\user_avatar.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c40951855896_26607118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.cdnImageUrl.php','function'=>'smarty_modifier_cdnImageUrl',),1=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.cdnMembersProfilePicUrl.php','function'=>'smarty_modifier_cdnMembersProfilePicUrl',),));
$_smarty_tpl->_assignInScope('letter', mb_substr($_smarty_tpl->tpl_vars['username']->value,0,1));
$_smarty_tpl->_assignInScope('background', UserManager::getAvatarColor($_smarty_tpl->tpl_vars['letter']->value));?><span class="user-avatar<?php if ($_smarty_tpl->tpl_vars['class']->value != '') {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?> js-user-avatar_block"><?php if ($_smarty_tpl->tpl_vars['profilepicture']->value === 'noprofilepicture.gif' && (is_numeric($_smarty_tpl->tpl_vars['letter']->value) || $_smarty_tpl->tpl_vars['letter']->value == '_' || $_smarty_tpl->tpl_vars['letter']->value == '-')) {?><img class="user-avatar__picture rounded" src="<?php echo smarty_modifier_cdnImageUrl("/avatar/".((string)$_smarty_tpl->tpl_vars['size']->value)."/noprofilepicture.png");?>
" style="background: <?php echo $_smarty_tpl->tpl_vars['background']->value;?>
;" alt="<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
"><?php } elseif ($_smarty_tpl->tpl_vars['profilepicture']->value === 'noprofilepicture.gif') {?><span class="user-avatar__default" style="background: <?php echo $_smarty_tpl->tpl_vars['background']->value;?>
;"><?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && $_smarty_tpl->tpl_vars['pageName']->value == "view" && $_smarty_tpl->tpl_vars['reviewsBlock']->value == "kwork_reviews") {?><img class="user-avatar__picture rounded lazy-load_scroll" src="<?php echo smarty_modifier_cdnImageUrl("/blank.png");?>
" data-src="<?php echo smarty_modifier_cdnMembersProfilePicUrl("/".((string)$_smarty_tpl->tpl_vars['size']->value)."/".((string)$_smarty_tpl->tpl_vars['profilepicture']->value));?>
" <?php if ($_smarty_tpl->tpl_vars['size']->value == 'medium') {?>data-<?php echo userMediumPictureSrcset($_smarty_tpl->tpl_vars['profilepicture']->value);
}?> alt=""><?php } else { ?><img class="user-avatar__picture js-user-avatar__picture rounded" src="<?php echo smarty_modifier_cdnMembersProfilePicUrl("/".((string)$_smarty_tpl->tpl_vars['size']->value)."/".((string)$_smarty_tpl->tpl_vars['profilepicture']->value));?>
" alt=""><?php }?></span><?php }
}
