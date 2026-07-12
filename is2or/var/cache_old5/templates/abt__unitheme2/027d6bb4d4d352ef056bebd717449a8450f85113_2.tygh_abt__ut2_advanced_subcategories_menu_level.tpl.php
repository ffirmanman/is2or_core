<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:57
  from 'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6d3889a1_88010695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '027d6bb4d4d352ef056bebd717449a8450f85113' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl' => 3,
  ),
))) {
function content_6a133f6d3889a1_88010695 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components';
\Tygh\Languages\Helper::preloadLangVars(array('more','more','less','less','more','more','less','less'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ut2-items level-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category', false, NULL, 'categories', array (
  'iteration' => true,
  'total' => true,
));
$foreach52DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach52DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
?>
    <?php if ($_smarty_tpl->getValue('level') == 2 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_2']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)-$_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_2']), ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('level') == 3 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_3']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)-$_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_3']), ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('category')['current'] || $_smarty_tpl->getValue('abt__ut2_subcategories')['simple_tree']) {?>
        <?php $_smarty_tpl->assign('parent', false, false, NULL);?>
    <?php }?>

    <div class="<?php if ($_smarty_tpl->getValue('category')['current']) {?> current<?php }
if ($_smarty_tpl->getValue('parent')) {?> parent<?php } else { ?> ut2-item<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_item')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('category')['current']) {?>
            <span><?php echo $_smarty_tpl->getValue('category')['category'];?>

                <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_products_count'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_category_products_count')($_smarty_tpl->getValue('category')['category_id'],true)), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
echo htmlspecialchars((string) ($_prefixVariable8), ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </span>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('parent')) {?><div class="ut2-item"><?php }?>
            <a
                    <?php if ($_REQUEST['dispatch'] == 'companies.products') {?>
                        <?php $_smarty_tpl->assign('url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"category_id"), false, NULL);?>
                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('url'),"category_id=".((string)$_smarty_tpl->getValue('category')['category_id'])))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('category')['category_id']))), ENT_QUOTES, 'UTF-8');?>
"

                    <?php }?>
            >
                <?php if ($_smarty_tpl->getValue('parent')) {?>
                    <span><i class="ut2-icon-arrow_back_black"></i><?php echo $_smarty_tpl->getValue('category')['category'];?>
</span>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getValue('category')['category'];?>

                <?php }?>

                <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_products_count'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_category_products_count')($_smarty_tpl->getValue('category')['category_id'],true)), ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
echo htmlspecialchars((string) ($_prefixVariable9), ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </a>
            <?php if ($_smarty_tpl->getValue('parent')) {?></div><?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('category')['subcategories']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->getValue('category')['subcategories'],'level'=>$_smarty_tpl->getValue('level')+1,'parent'=>$_smarty_tpl->getValue('parent')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->getValue('level') == 2 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) > $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_2'] && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == ($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_item')), ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('level') == 3 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) > $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_3'] && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == ($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_item')), ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ut2-items level-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category', false, NULL, 'categories', array (
  'iteration' => true,
  'total' => true,
));
$foreach53DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach53DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
?>
    <?php if ($_smarty_tpl->getValue('level') == 2 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_2']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)-$_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_2']), ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('level') == 3 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_3']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)-$_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_3']), ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('category')['current'] || $_smarty_tpl->getValue('abt__ut2_subcategories')['simple_tree']) {?>
        <?php $_smarty_tpl->assign('parent', false, false, NULL);?>
    <?php }?>

    <div class="<?php if ($_smarty_tpl->getValue('category')['current']) {?> current<?php }
if ($_smarty_tpl->getValue('parent')) {?> parent<?php } else { ?> ut2-item<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_item')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('category')['current']) {?>
            <span><?php echo $_smarty_tpl->getValue('category')['category'];?>

                <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_products_count'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_category_products_count')($_smarty_tpl->getValue('category')['category_id'],true)), ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
echo htmlspecialchars((string) ($_prefixVariable10), ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </span>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('parent')) {?><div class="ut2-item"><?php }?>
            <a
                    <?php if ($_REQUEST['dispatch'] == 'companies.products') {?>
                        <?php $_smarty_tpl->assign('url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"category_id"), false, NULL);?>
                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('url'),"category_id=".((string)$_smarty_tpl->getValue('category')['category_id'])))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('category')['category_id']))), ENT_QUOTES, 'UTF-8');?>
"

                    <?php }?>
            >
                <?php if ($_smarty_tpl->getValue('parent')) {?>
                    <span><i class="ut2-icon-arrow_back_black"></i><?php echo $_smarty_tpl->getValue('category')['category'];?>
</span>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getValue('category')['category'];?>

                <?php }?>

                <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_products_count'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_category_products_count')($_smarty_tpl->getValue('category')['category_id'],true)), ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
echo htmlspecialchars((string) ($_prefixVariable11), ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </a>
            <?php if ($_smarty_tpl->getValue('parent')) {?></div><?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('category')['subcategories']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->getValue('category')['subcategories'],'level'=>$_smarty_tpl->getValue('level')+1,'parent'=>$_smarty_tpl->getValue('parent')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->getValue('level') == 2 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) > $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_2'] && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == ($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_item')), ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('level') == 3 && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) > $_smarty_tpl->getValue('block')['properties']['abt__ut2_category_count_level_3'] && ($_smarty_tpl->getValue('__smarty_foreach_categories')['iteration'] ?? null) == ($_smarty_tpl->getValue('__smarty_foreach_categories')['total'] ?? null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_item')), ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->assign('hidden_item', 'hidden-item hidden', false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php }
}
}
