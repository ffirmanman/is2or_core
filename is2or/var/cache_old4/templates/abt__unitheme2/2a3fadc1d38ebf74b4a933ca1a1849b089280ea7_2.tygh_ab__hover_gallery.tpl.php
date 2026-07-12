<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:47
  from 'tygh:views/products/components/ab__hover_gallery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0728cc23_29258645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3fadc1d38ebf74b4a933ca1a1849b089280ea7' => 
    array (
      0 => 'views/products/components/ab__hover_gallery.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69fb4a0728cc23_29258645 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "image_previews", null, null);?>
    <?php if ($_smarty_tpl->getValue('image_pairs')) {?>
        <?php $_smarty_tpl->assign('image_pairs', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('image_pairs'),0,5), false, NULL);?>
    <?php }?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('image_pairs'), 'image_pair');
$foreach46DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach46DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('image_pair')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->getValue('image_pair'),'capture_image'=>true,'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
            <div class="item" data-ca-product-additional-image-src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path'));?>
"
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-product-additional-image-srcset="<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi');?>
"<?php }?>
            >
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_previews'))) {?>
    <div class="cm-ab-hover-gallery abt__ut2_hover_gallery <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');?>
" >
        <div class="item"></div>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_previews');?>

        <div class="abt__ut2_hover_gallery_indicators">
            <div class="active"></div>
            <?php
$_smarty_tpl->assign('count', null);$_smarty_tpl->tpl_vars['count']->step = 1;$_smarty_tpl->tpl_vars['count']->total = (int) ceil(($_smarty_tpl->tpl_vars['count']->step > 0 ? $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('image_pairs'))+1 - (1) : 1-($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('image_pairs')))+1)/abs($_smarty_tpl->tpl_vars['count']->step));
if ($_smarty_tpl->tpl_vars['count']->total > 0) {
for ($_smarty_tpl->tpl_vars['count']->value = 1, $_smarty_tpl->tpl_vars['count']->iteration = 1;$_smarty_tpl->tpl_vars['count']->iteration <= $_smarty_tpl->tpl_vars['count']->total;$_smarty_tpl->tpl_vars['count']->value += $_smarty_tpl->tpl_vars['count']->step, $_smarty_tpl->tpl_vars['count']->iteration++) {
$_smarty_tpl->tpl_vars['count']->first = $_smarty_tpl->tpl_vars['count']->iteration === 1;$_smarty_tpl->tpl_vars['count']->last = $_smarty_tpl->tpl_vars['count']->iteration === $_smarty_tpl->tpl_vars['count']->total;?>
                <div></div>
            <?php }
}
?>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/ab__hover_gallery.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/ab__hover_gallery.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "image_previews", null, null);?>
    <?php if ($_smarty_tpl->getValue('image_pairs')) {?>
        <?php $_smarty_tpl->assign('image_pairs', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('image_pairs'),0,5), false, NULL);?>
    <?php }?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('image_pairs'), 'image_pair');
$foreach47DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach47DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('image_pair')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->getValue('image_pair'),'capture_image'=>true,'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
            <div class="item" data-ca-product-additional-image-src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path'));?>
"
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-product-additional-image-srcset="<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi');?>
"<?php }?>
            >
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_previews'))) {?>
    <div class="cm-ab-hover-gallery abt__ut2_hover_gallery <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');?>
" >
        <div class="item"></div>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_previews');?>

        <div class="abt__ut2_hover_gallery_indicators">
            <div class="active"></div>
            <?php
$_smarty_tpl->assign('count', null);$_smarty_tpl->tpl_vars['count']->step = 1;$_smarty_tpl->tpl_vars['count']->total = (int) ceil(($_smarty_tpl->tpl_vars['count']->step > 0 ? $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('image_pairs'))+1 - (1) : 1-($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('image_pairs')))+1)/abs($_smarty_tpl->tpl_vars['count']->step));
if ($_smarty_tpl->tpl_vars['count']->total > 0) {
for ($_smarty_tpl->tpl_vars['count']->value = 1, $_smarty_tpl->tpl_vars['count']->iteration = 1;$_smarty_tpl->tpl_vars['count']->iteration <= $_smarty_tpl->tpl_vars['count']->total;$_smarty_tpl->tpl_vars['count']->value += $_smarty_tpl->tpl_vars['count']->step, $_smarty_tpl->tpl_vars['count']->iteration++) {
$_smarty_tpl->tpl_vars['count']->first = $_smarty_tpl->tpl_vars['count']->iteration === 1;$_smarty_tpl->tpl_vars['count']->last = $_smarty_tpl->tpl_vars['count']->iteration === $_smarty_tpl->tpl_vars['count']->total;?>
                <div></div>
            <?php }
}
?>
        </div>
    </div>
<?php }
}
}
}
