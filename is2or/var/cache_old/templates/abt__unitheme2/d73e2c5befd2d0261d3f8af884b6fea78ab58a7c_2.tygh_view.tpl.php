<?php
/* Smarty version 5.4.3, created on 2026-03-09 16:24:18
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_tags/overrides/addons/tags/views/tags/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aeca02d04ed4_13536135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73e2c5befd2d0261d3f8af884b6fea78ab58a7c' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_tags/overrides/addons/tags/views/tags/view.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aeca02d04ed4_13536135 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_tags/overrides/addons/tags/views/tags';
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products','text_no_products'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__seo_for_tags']['description_location'] == "top" && $_smarty_tpl->getValue('tag_data')['description'] && $_smarty_tpl->getValue('search')['page'] == 1) {?>
    <div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('tag_data')['description'];?>
</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['tags']['tags_for_products'] == "Y") {?>
    <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('products')) {?>
            <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        <?php } else { ?>
            <p class="ty-no-items cm-pagination-container"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        <?php }?>
    <!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['tags']['tags_for_pages'] == "Y" && $_smarty_tpl->getValue('pages')) {?>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'page');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach0DoElse = false;
?>
            <li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['ab__seo_for_tags']['description_location'] == "bottom" && $_smarty_tpl->getValue('tag_data')['description'] && $_smarty_tpl->getValue('search')['page'] == 1) {?>
    <div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('tag_data')['description'];?>
</div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tags:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tags:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('tag_data')['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('tag_data')['tag'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_tags/overrides/addons/tags/views/tags/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_tags/overrides/addons/tags/views/tags/view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__seo_for_tags']['description_location'] == "top" && $_smarty_tpl->getValue('tag_data')['description'] && $_smarty_tpl->getValue('search')['page'] == 1) {?>
    <div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('tag_data')['description'];?>
</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['tags']['tags_for_products'] == "Y") {?>
    <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('products')) {?>
            <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        <?php } else { ?>
            <p class="ty-no-items cm-pagination-container"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        <?php }?>
    <!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['tags']['tags_for_pages'] == "Y" && $_smarty_tpl->getValue('pages')) {?>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'page');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach1DoElse = false;
?>
            <li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['ab__seo_for_tags']['description_location'] == "bottom" && $_smarty_tpl->getValue('tag_data')['description'] && $_smarty_tpl->getValue('search')['page'] == 1) {?>
    <div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('tag_data')['description'];?>
</div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tags:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tags:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('tag_data')['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('tag_data')['tag'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
