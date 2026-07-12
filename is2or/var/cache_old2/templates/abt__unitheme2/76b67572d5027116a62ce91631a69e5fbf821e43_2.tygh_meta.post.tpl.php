<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:05
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/overrides/addons/seo/hooks/index/meta.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa5cfed09_45880021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b67572d5027116a62ce91631a69e5fbf821e43' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/overrides/addons/seo/hooks/index/meta.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa5cfed09_45880021 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/overrides/addons/seo/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:ab__so_noindex"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!( !$_smarty_tpl->hasVariable('ab__sf_seo_canonical') || empty($_smarty_tpl->getValue('ab__sf_seo_canonical'))) && $_smarty_tpl->getValue('ab__sf_seo_canonical')['noindex_nofollow'] == 'N') {?>
    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']) {?><link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']) {?><link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" /><?php }
} elseif (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_seo_is_indexed_page')($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->getValue('seo_canonical')['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('seo_canonical')['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('seo_canonical')['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:ab__so_noindex"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('seo_alt_hreflangs_list'), 'seo_alt_lang', false, 'seo_alt_lang_code');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('seo_alt_lang_code')->value => $_smarty_tpl->getVariable('seo_alt_lang')->value) {
$foreach4DoElse = false;
?>
    <link title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang')['name']), ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang')['direction']), ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang_code')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang')['href']), ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('schema_org_markup_items'), 'markup_item');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('markup_item')->value) {
$foreach5DoElse = false;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->assign('pretty_print', 0, false, NULL);?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->assign('pretty_print', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("JSON_PRETTY_PRINT"), false, NULL);?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->getValue('markup_item'), (int) $_smarty_tpl->getValue('pretty_print'));?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->assign('is_json_schema_org_markup_displayed', true, false, 8);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/overrides/addons/seo/hooks/index/meta.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/overrides/addons/seo/hooks/index/meta.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:ab__so_noindex"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!( !$_smarty_tpl->hasVariable('ab__sf_seo_canonical') || empty($_smarty_tpl->getValue('ab__sf_seo_canonical'))) && $_smarty_tpl->getValue('ab__sf_seo_canonical')['noindex_nofollow'] == 'N') {?>
    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']) {?><link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']) {?><link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" /><?php }
} elseif (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_seo_is_indexed_page')($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->getValue('seo_canonical')['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('seo_canonical')['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('seo_canonical')['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:ab__so_noindex"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('seo_alt_hreflangs_list'), 'seo_alt_lang', false, 'seo_alt_lang_code');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('seo_alt_lang_code')->value => $_smarty_tpl->getVariable('seo_alt_lang')->value) {
$foreach6DoElse = false;
?>
    <link title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang')['name']), ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang')['direction']), ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang_code')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_alt_lang')['href']), ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('schema_org_markup_items'), 'markup_item');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('markup_item')->value) {
$foreach7DoElse = false;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->assign('pretty_print', 0, false, NULL);?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->assign('pretty_print', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("JSON_PRETTY_PRINT"), false, NULL);?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->getValue('markup_item'), (int) $_smarty_tpl->getValue('pretty_print'));?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->assign('is_json_schema_org_markup_displayed', true, false, 8);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
