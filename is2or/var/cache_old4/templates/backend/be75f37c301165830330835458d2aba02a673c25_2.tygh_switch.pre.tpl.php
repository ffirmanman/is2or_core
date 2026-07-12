<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:addons/ab__antibot/hooks/ab__antibot/switch.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5532b36380_91915000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be75f37c301165830330835458d2aba02a673c25' => 
    array (
      0 => 'addons/ab__antibot/hooks/ab__antibot/switch.pre.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5532b36380_91915000 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__antibot/hooks/ab__antibot';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ab.view_layout.for_real_users','ab__ab.view_layout.for_white_bots','ab__ab.view_layout.for_black_and_other_bots','ab__ab.view_layout'));
$_smarty_tpl->assign('ab__antibot_views', array("for_real_users"=>array("name"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ab.view_layout.for_real_users", [], $_smarty_tpl->getSmarty()->getLanguage()),"btn_class"=>"btn btn-primary"),"for_white_bots"=>array("name"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ab.view_layout.for_white_bots", [], $_smarty_tpl->getSmarty()->getLanguage()),"btn_class"=>"btn"),"for_black_and_other_bots"=>array("name"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ab.view_layout.for_black_and_other_bots", [], $_smarty_tpl->getSmarty()->getLanguage()),"btn_class"=>"btn")), false, NULL);?>
<div class="ab-antibot-views mobile-hidden hidden" id="ab__antibot_views">
<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ab.view_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
<div class="clearfix"></div>
<div class="btn-group ab-antibot-views-switch">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__antibot_views'), 'ab__antibot_view', false, 'ab__antibot_view_id');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ab__antibot_view_id')->value => $_smarty_tpl->getVariable('ab__antibot_view')->value) {
$foreach6DoElse = false;
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->getValue('ab__antibot_view')['name'],'raw'=>true,'class'=>"ab-antibot-view disabled ".((string)$_smarty_tpl->getValue('ab__antibot_view')['btn_class']),'data'=>array("data-ca-ab-antibot-view"=>$_smarty_tpl->getValue('ab__antibot_view_id'))), true);?>

<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<!--ab__antibot_views--></div>
<?php }
}
