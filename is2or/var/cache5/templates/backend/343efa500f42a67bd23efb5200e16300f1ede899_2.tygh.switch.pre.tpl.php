<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:38:53
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/hooks/ab__antibot/switch.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835c06d1bbc74_67335134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '343efa500f42a67bd23efb5200e16300f1ede899' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/hooks/ab__antibot/switch.pre.tpl',
      1 => 1741957648,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835c06d1bbc74_67335134 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ab__ab.view_layout.for_real_users','ab__ab.view_layout.for_white_bots','ab__ab.view_layout.for_black_and_other_bots','ab__ab.view_layout'));
$_smarty_tpl->_assignInScope('ab__antibot_views', array("for_real_users"=>array("name"=>$_smarty_tpl->__("ab__ab.view_layout.for_real_users"),"btn_class"=>"btn btn-primary"),"for_white_bots"=>array("name"=>$_smarty_tpl->__("ab__ab.view_layout.for_white_bots"),"btn_class"=>"btn"),"for_black_and_other_bots"=>array("name"=>$_smarty_tpl->__("ab__ab.view_layout.for_black_and_other_bots"),"btn_class"=>"btn")));?>
<div class="ab-antibot-views mobile-hidden hidden" id="ab__antibot_views">
<span><?php echo $_smarty_tpl->__("ab__ab.view_layout");?>
</span>
<div class="clearfix"></div>
<div class="btn-group ab-antibot-views-switch">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__antibot_views']->value, 'ab__antibot_view', false, 'ab__antibot_view_id');
$_smarty_tpl->tpl_vars['ab__antibot_view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ab__antibot_view_id']->value => $_smarty_tpl->tpl_vars['ab__antibot_view']->value) {
$_smarty_tpl->tpl_vars['ab__antibot_view']->do_else = false;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['ab__antibot_view']->value['name'],'raw'=>true,'class'=>"ab-antibot-view disabled ".((string)$_smarty_tpl->tpl_vars['ab__antibot_view']->value['btn_class']),'data'=>array("data-ca-ab-antibot-view"=>$_smarty_tpl->tpl_vars['ab__antibot_view_id']->value)), true);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!--ab__antibot_views--></div>
<?php }
}
