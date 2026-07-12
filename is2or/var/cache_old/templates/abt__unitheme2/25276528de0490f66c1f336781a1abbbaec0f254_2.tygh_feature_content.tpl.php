<?php
/* Smarty version 5.4.3, created on 2026-03-10 03:55:57
  from 'tygh:views/product_features/components/feature_content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69af6c1d314392_62705617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25276528de0490f66c1f336781a1abbbaec0f254' => 
    array (
      0 => 'views/product_features/components/feature_content.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69af6c1d314392_62705617 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/product_features/components';
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products','text_no_products'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
    <div class="ut2-feat-container<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['features']['description_position'] == 'bottom') {?> reverse<?php }?>">
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['features']['description_position'] != 'none') {?>
            <div class="ty-feature">
                <div class="ty-feature__description ty-wysiwyg-content">
                    <?php if ($_smarty_tpl->getValue('variant_data')['image_pair']) {?>
                        <div class="ty-feature__image">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant_data')['image_pair']), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('variant_data')['url']) {?>
                        <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['url']), ENT_QUOTES, 'UTF-8');?>
</a></p>
                    <?php }?>
                    <?php echo $_smarty_tpl->getValue('variant_data')['description'];?>

                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('products')) {?>
            <div class="ab-ut2-feature-content">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_features:ab__additional_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_features:ab__additional_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </div>
        <?php } else { ?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        <?php }?>
    </div>
<!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/components/feature_content.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/product_features/components/feature_content.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
    <div class="ut2-feat-container<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['features']['description_position'] == 'bottom') {?> reverse<?php }?>">
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['features']['description_position'] != 'none') {?>
            <div class="ty-feature">
                <div class="ty-feature__description ty-wysiwyg-content">
                    <?php if ($_smarty_tpl->getValue('variant_data')['image_pair']) {?>
                        <div class="ty-feature__image">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant_data')['image_pair']), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('variant_data')['url']) {?>
                        <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['url']), ENT_QUOTES, 'UTF-8');?>
</a></p>
                    <?php }?>
                    <?php echo $_smarty_tpl->getValue('variant_data')['description'];?>

                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('products')) {?>
            <div class="ab-ut2-feature-content">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_features:ab__additional_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_features:ab__additional_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </div>
        <?php } else { ?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        <?php }?>
    </div>
<!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
