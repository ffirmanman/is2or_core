<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f6295a4_75961669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c104e90a9e420847949b3167fa0f55a4ef3b8743' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_images.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ada21f6295a4_75961669 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('images')) {?>
    <div class="ty-product-review-post-images">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, NULL, 'post_images', array (
  'index' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']++;
?>
            <figure class="ty-product-review-post-images__item">
                <?php $_smarty_tpl->assign('thumb_h', ($_smarty_tpl->getValue('image')['detailed']['image_y'] < $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 80 : 0, false, NULL);?>
                <?php $_smarty_tpl->assign('thumb_w', ($_smarty_tpl->getValue('image')['detailed']['image_y'] >= $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 80 : 0, false, NULL);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'','images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('thumb_w'),'image_height'=>$_smarty_tpl->getValue('thumb_h'),'image_link_additional_attrs'=>array("data-ca-image-order"=>($_smarty_tpl->getValue('__smarty_foreach_post_images')['index'] ?? null)),'show_detailed_link'=>true,'image_id'=>"preview[product_review_".((string)$_smarty_tpl->getValue('preview_id'))."]",'link_class'=>"cm-previewer-only ty-previewer-only",'obj_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('uniqid')()), (int) 0, $_smarty_current_dir);
?>
            </figure>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_images.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_images.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('images')) {?>
    <div class="ty-product-review-post-images">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, NULL, 'post_images', array (
  'index' => true,
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach3DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']++;
?>
            <figure class="ty-product-review-post-images__item">
                <?php $_smarty_tpl->assign('thumb_h', ($_smarty_tpl->getValue('image')['detailed']['image_y'] < $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 80 : 0, false, NULL);?>
                <?php $_smarty_tpl->assign('thumb_w', ($_smarty_tpl->getValue('image')['detailed']['image_y'] >= $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 80 : 0, false, NULL);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'','images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('thumb_w'),'image_height'=>$_smarty_tpl->getValue('thumb_h'),'image_link_additional_attrs'=>array("data-ca-image-order"=>($_smarty_tpl->getValue('__smarty_foreach_post_images')['index'] ?? null)),'show_detailed_link'=>true,'image_id'=>"preview[product_review_".((string)$_smarty_tpl->getValue('preview_id'))."]",'link_class'=>"cm-previewer-only ty-previewer-only",'obj_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('uniqid')()), (int) 0, $_smarty_current_dir);
?>
            </figure>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
