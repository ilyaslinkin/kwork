<?php
/* Smarty version 3.1.32, created on 2022-07-05 12:50:10
  from 'C:\OpenServer\domains\kwork\public_html\themes\index\statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_62c40952d65964_13280494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7d3b69bc7b3d2d5c34fb73d8f04a10724bab05' => 
    array (
      0 => 'C:\\OpenServer\\domains\\kwork\\public_html\\themes\\index\\statistics.tpl',
      1 => 1646802714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c40952d65964_13280494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.space.php','function'=>'smarty_modifier_space',),1=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\function.declension.php','function'=>'smarty_function_declension',),2=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.tn.php','function'=>'smarty_modifier_tn',),3=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.num_span.php','function'=>'smarty_modifier_num_span',),4=>array('file'=>'C:\\OpenServer\\domains\\kwork\\public_html\\smarty\\libs\\plugins\\modifier.t.php','function'=>'smarty_modifier_t',),));
?><div class="sys-stats"><table><tr><td class="w33p"><div class="stat-count f34 ta-center" style="line-height:30px;"><?php echo smarty_modifier_space($_smarty_tpl->tpl_vars['stat_act_kworks_count']->value,3);?>
</div><div class="stat-desc f14 ta-center"><?php echo smarty_function_declension(array('count'=>$_smarty_tpl->tpl_vars['stat_act_kworks_count']->value,'form1'=>"Активный кворк",'form2'=>"Активных кворка",'form5'=>"Активных кворков"),$_smarty_tpl);?>
</div></td><td class="w33p"><?php if (Translations::isDefaultLang()) {?><div class="stat-count f34 ta-center" style="line-height:30px;"><?php echo smarty_modifier_space($_smarty_tpl->tpl_vars['stat_wants_per_week']->value,3);?>
</div><div class="stat-desc f14 ta-center"><?php echo smarty_modifier_tn('Новых проектов на бирже за неделю',$_smarty_tpl->tpl_vars['stat_wants_per_week']->value);?>
</div><?php } else { ?><div class="stat-count ta-center" style="font-size:20px; line-height:19px;"><?php $_smarty_tpl->assign('work_time' , insert_countdown_short (array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['stat_avg_order_done']->value, 'type' => "duration"),$_smarty_tpl), true);
echo smarty_modifier_num_span($_smarty_tpl->tpl_vars['work_time']->value,1);?>
</div><div class="stat-desc f14 ta-center"><?php echo smarty_modifier_t('Среднее время выполнения');?>
</div><?php }?></td><td class="w33p"><div class="stat-count f34 ta-center" style="line-height:30px;"><?php echo smarty_modifier_space($_smarty_tpl->tpl_vars['stat_act_kworks_to_week_count']->value,3);?>
</div><div class="stat-desc f14 ta-center"><?php echo smarty_function_declension(array('count'=>$_smarty_tpl->tpl_vars['stat_act_kworks_to_week_count']->value,'form1'=>"Новый кворк",'form2'=>"Новых кворка",'form5'=>"Новых кворков"),$_smarty_tpl);?>
 <?php echo smarty_modifier_t('за неделю');?>
</div></td></tr></table></div><?php }
}
