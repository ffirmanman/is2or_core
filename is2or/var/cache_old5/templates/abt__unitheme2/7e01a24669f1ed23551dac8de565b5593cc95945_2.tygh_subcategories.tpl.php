<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:57
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/views/categories/components/subcategories.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6d6745c4_24267130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e01a24669f1ed23551dac8de565b5593cc95945' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/views/categories/components/subcategories.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_6a133f6d6745c4_24267130 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/views/categories/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('subcategories') && $_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_subcategories'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subcategories')),'c'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp)), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('subcategories'),'size'=>$_smarty_tpl->getValue('rows'),'assign'=>"splitted_subcategories"), $_smarty_tpl);?>

    <ul class="subcategories clearfix">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_subcategories'), 'ssubcateg');
$foreach66DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ssubcateg')->value) {
$foreach66DoElse = false;
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ssubcateg'), 'category', false, NULL, 'ssubcateg', array (
));
$foreach67DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach67DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('category')) {?>
                    <li class="ty-subcategories__item <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>cat-img<?php }?>">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('category')['category_id']))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->getValue('category')['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </ul>
<?php } elseif ($_smarty_tpl->getValue('ab__sf_pages_as_subcategories') && $_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_subcategories'] == "Y") {?>
    <ul class="subcategories clearfix">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </ul>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/views/categories/components/subcategories.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/views/categories/components/subcategories.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('subcategories') && $_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_subcategories'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subcategories')),'c'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp)), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('subcategories'),'size'=>$_smarty_tpl->getValue('rows'),'assign'=>"splitted_subcategories"), $_smarty_tpl);?>

    <ul class="subcategories clearfix">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_subcategories'), 'ssubcateg');
$foreach68DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ssubcateg')->value) {
$foreach68DoElse = false;
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ssubcateg'), 'category', false, NULL, 'ssubcateg', array (
));
$foreach69DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach69DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('category')) {?>
                    <li class="ty-subcategories__item <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>cat-img<?php }?>">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('category')['category_id']))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->getValue('category')['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </ul>
<?php } elseif ($_smarty_tpl->getValue('ab__sf_pages_as_subcategories') && $_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_subcategories'] == "Y") {?>
    <ul class="subcategories clearfix">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_subcategories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </ul>
<?php }
}
}
}
