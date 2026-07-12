<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae6152498b67_81956911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bc0054534405765850589ba2f6e4e58cf077858' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_content.pre.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/ab__seo_for_blog/blocks/static_templates/ab__sfb_table_of_content.tpl' => 2,
  ),
))) {
function content_69ae6152498b67_81956911 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages';
\Tygh\Languages\Helper::preloadLangVars(array('ab__sfb.contents','ab__sfb.contents'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('page')['description'] && $_smarty_tpl->getValue('page')['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <?php if ($_smarty_tpl->getValue('page')['main_pair']) {?>
        <div class="ty-blog__img-block">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('page')['page_id'],'images'=>$_smarty_tpl->getValue('page')['main_pair']), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('settings')['abt__device'] === "mobile") {?>
        <div>
            <p>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__sfb.contents", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </p>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_for_blog/blocks/static_templates/ab__sfb_table_of_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/overrides/addons/blog/hooks/pages/page_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('page')['description'] && $_smarty_tpl->getValue('page')['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <?php if ($_smarty_tpl->getValue('page')['main_pair']) {?>
        <div class="ty-blog__img-block">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('page')['page_id'],'images'=>$_smarty_tpl->getValue('page')['main_pair']), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('settings')['abt__device'] === "mobile") {?>
        <div>
            <p>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__sfb.contents", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </p>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_for_blog/blocks/static_templates/ab__sfb_table_of_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }
}
}
}
}
