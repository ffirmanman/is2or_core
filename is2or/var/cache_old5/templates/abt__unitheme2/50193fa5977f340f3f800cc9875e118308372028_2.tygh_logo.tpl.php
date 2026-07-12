<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:55
  from 'tygh:blocks/static_templates/logo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6b13d140_23505602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50193fa5977f340f3f800cc9875e118308372028' => 
    array (
      0 => 'blocks/static_templates/logo.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_6a133f6b13d140_23505602 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/static_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-logo-container">
    <?php $_smarty_tpl->assign('logo_link', (($tmp = $_smarty_tpl->getValue('block')['properties']['enable_link'] ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp) == "Y", false, NULL);?>

    <?php if ($_smarty_tpl->getValue('logo_link')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logos')['theme']['image']['alt']), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('logos')['theme']['image'],'class'=>"ty-logo-container__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('logos')['theme']['image']['image_x'],"height"=>$_smarty_tpl->getValue('logos')['theme']['image']['image_y']),'obj_id'=>false,'no_ids'=>true,'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
    
    <?php if ($_smarty_tpl->getValue('logo_link')) {?>
        </a>
    <?php }?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/logo.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/logo.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-logo-container">
    <?php $_smarty_tpl->assign('logo_link', (($tmp = $_smarty_tpl->getValue('block')['properties']['enable_link'] ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp) == "Y", false, NULL);?>

    <?php if ($_smarty_tpl->getValue('logo_link')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logos')['theme']['image']['alt']), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('logos')['theme']['image'],'class'=>"ty-logo-container__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('logos')['theme']['image']['image_x'],"height"=>$_smarty_tpl->getValue('logos')['theme']['image']['image_y']),'obj_id'=>false,'no_ids'=>true,'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
    
    <?php if ($_smarty_tpl->getValue('logo_link')) {?>
        </a>
    <?php }?>
</div>
<?php }
}
}
