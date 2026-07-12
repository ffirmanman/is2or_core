<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/ab__hover_gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21ba0d3b3_71072538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70570248d396e660f3756ca25f091fbfef8b516f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/ab__hover_gallery.tpl',
      1 => 1736836655,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_682fe21ba0d3b3_71072538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "image_previews", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['image_pairs']->value) {?>
        <?php $_smarty_tpl->_assignInScope('image_pairs', array_slice($_smarty_tpl->tpl_vars['image_pairs']->value,0,5));?>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_pairs']->value, 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'capture_image'=>true,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0, true);
?>
            <div class="item" data-ca-product-additional-image-src="<?php echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path'));?>
"
                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-product-additional-image-srcset="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi');?>
"<?php }?>
            >
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_previews'))) {?>
    <div class="cm-ab-hover-gallery abt__ut2_hover_gallery <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
" >
        <div class="item"></div>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_previews');?>

        <div class="abt__ut2_hover_gallery_indicators">
            <div class="active"></div>
            <?php
$_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['count']->step = 1;$_smarty_tpl->tpl_vars['count']->total = (int) ceil(($_smarty_tpl->tpl_vars['count']->step > 0 ? count($_smarty_tpl->tpl_vars['image_pairs']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['image_pairs']->value))+1)/abs($_smarty_tpl->tpl_vars['count']->step));
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
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/ab__hover_gallery.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/ab__hover_gallery.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "image_previews", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['image_pairs']->value) {?>
        <?php $_smarty_tpl->_assignInScope('image_pairs', array_slice($_smarty_tpl->tpl_vars['image_pairs']->value,0,5));?>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_pairs']->value, 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'capture_image'=>true,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0, true);
?>
            <div class="item" data-ca-product-additional-image-src="<?php echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path'));?>
"
                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-product-additional-image-srcset="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi');?>
"<?php }?>
            >
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_previews'))) {?>
    <div class="cm-ab-hover-gallery abt__ut2_hover_gallery <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
" >
        <div class="item"></div>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'image_previews');?>

        <div class="abt__ut2_hover_gallery_indicators">
            <div class="active"></div>
            <?php
$_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['count']->step = 1;$_smarty_tpl->tpl_vars['count']->total = (int) ceil(($_smarty_tpl->tpl_vars['count']->step > 0 ? count($_smarty_tpl->tpl_vars['image_pairs']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['image_pairs']->value))+1)/abs($_smarty_tpl->tpl_vars['count']->step));
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
