<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:28
  from 'tygh:addons/ab__so_noindex_tech_pages/hooks/index/ab__so_noindex.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9470dfa9d8_81564963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56c67a79f2ac405d0da90f2fd8238f4e54aa2e3f' => 
    array (
      0 => 'addons/ab__so_noindex_tech_pages/hooks/index/ab__so_noindex.override.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9470dfa9d8_81564963 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__so_noindex_tech_pages/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('runtime')['controller'],array("profiles","auth","checkout","orders","wishlist","reward_points")) || $_REQUEST['dispatch'] == "product_features.compare") {?>
    <meta name="robots" content="noindex, nofollow" />

<?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_SERVER['REQUEST_URI'],"/index.php?dispatch") !== false || ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['noindex_empty_categories'] == "Y" && $_smarty_tpl->getValue('runtime')['controller'] == "categories" && $_smarty_tpl->getValue('runtime')['mode'] == "view" && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('products')) == 0 && !$_smarty_tpl->getValue('ab__lc_landing_categories')) || ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['noindex_for_pages_gt_1'] == "Y" && $_smarty_tpl->getValue('search')['page'] > 1) || ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['noindex_for_product_reviews_pagination'] === "Y" && $_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('runtime')['mode'] == "view" && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_REQUEST['selected_section'],array("product_reviews","discussion"))) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__so_ntp_deny_indexation')('')) {?>
    <meta name="robots" content="noindex, follow" />
    <?php if ($_smarty_tpl->getValue('search')['page'] > 1 && $_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['canonical_for_pages_gt_1'] === "Y") {?>
        <?php $_smarty_tpl->assign('canonical', (($tmp = $_smarty_tpl->getValue('ab__so_ntp_base_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('seo_canonical')['current'] ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')) {?>
            <?php $_smarty_tpl->assign('canonical', $_smarty_tpl->getValue('ab__sf_seo_canonical')['base_url'], false, NULL);?>
        <?php }?>
        <link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('canonical')), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

<?php } elseif ($_smarty_tpl->getValue('ab__sf_seo_canonical')) {?>

    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['noindex_nofollow'] == "Y") {?>
        <meta name="robots" content="noindex,nofollow" />
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['add_page_referer_to_canonical_link'] != "N") {?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['base_url']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['base_url']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['exclude_next_prev_links'] != "Y") {?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']) {?><link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']) {?><link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php }?>
    <?php }?>

<?php } elseif (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_seo_is_indexed_page')($_REQUEST)) {?>
    <meta name="robots" content="noindex<?php if ($_smarty_tpl->getValue('settings')['Security']['secure_storefront'] == "partial" && $_smarty_tpl->getSmarty()->getModifierCallback('defined')("HTTPS")) {?>,nofollow<?php }?>" />

<?php } else { ?>
    <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['add_page_referer_to_canonical_link'] != "N") {?>
        <?php if ($_smarty_tpl->getValue('seo_canonical')['current']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('ab__so_ntp_base_url')) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__so_ntp_base_url')), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['exclude_next_prev_links'] != "Y") {?>
        <?php if ($_smarty_tpl->getValue('seo_canonical')['prev']) {?><link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php if ($_smarty_tpl->getValue('seo_canonical')['next']) {?><link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__so_noindex_tech_pages/hooks/index/ab__so_noindex.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__so_noindex_tech_pages/hooks/index/ab__so_noindex.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('runtime')['controller'],array("profiles","auth","checkout","orders","wishlist","reward_points")) || $_REQUEST['dispatch'] == "product_features.compare") {?>
    <meta name="robots" content="noindex, nofollow" />

<?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_SERVER['REQUEST_URI'],"/index.php?dispatch") !== false || ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['noindex_empty_categories'] == "Y" && $_smarty_tpl->getValue('runtime')['controller'] == "categories" && $_smarty_tpl->getValue('runtime')['mode'] == "view" && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('products')) == 0 && !$_smarty_tpl->getValue('ab__lc_landing_categories')) || ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['noindex_for_pages_gt_1'] == "Y" && $_smarty_tpl->getValue('search')['page'] > 1) || ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['noindex_for_product_reviews_pagination'] === "Y" && $_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('runtime')['mode'] == "view" && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_REQUEST['selected_section'],array("product_reviews","discussion"))) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__so_ntp_deny_indexation')('')) {?>
    <meta name="robots" content="noindex, follow" />
    <?php if ($_smarty_tpl->getValue('search')['page'] > 1 && $_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['canonical_for_pages_gt_1'] === "Y") {?>
        <?php $_smarty_tpl->assign('canonical', (($tmp = $_smarty_tpl->getValue('ab__so_ntp_base_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('seo_canonical')['current'] ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')) {?>
            <?php $_smarty_tpl->assign('canonical', $_smarty_tpl->getValue('ab__sf_seo_canonical')['base_url'], false, NULL);?>
        <?php }?>
        <link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('canonical')), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

<?php } elseif ($_smarty_tpl->getValue('ab__sf_seo_canonical')) {?>

    <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['noindex_nofollow'] == "Y") {?>
        <meta name="robots" content="noindex,nofollow" />
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['add_page_referer_to_canonical_link'] != "N") {?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['base_url']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['base_url']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['exclude_next_prev_links'] != "Y") {?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']) {?><link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
            <?php if ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']) {?><link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__sf_seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php }?>
    <?php }?>

<?php } elseif (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_seo_is_indexed_page')($_REQUEST)) {?>
    <meta name="robots" content="noindex<?php if ($_smarty_tpl->getValue('settings')['Security']['secure_storefront'] == "partial" && $_smarty_tpl->getSmarty()->getModifierCallback('defined')("HTTPS")) {?>,nofollow<?php }?>" />

<?php } else { ?>
    <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['add_page_referer_to_canonical_link'] != "N") {?>
        <?php if ($_smarty_tpl->getValue('seo_canonical')['current']) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['current']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('ab__so_ntp_base_url')) {?><link rel="canonical" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__so_ntp_base_url')), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('addons')['ab__so_noindex_tech_pages']['exclude_next_prev_links'] != "Y") {?>
        <?php if ($_smarty_tpl->getValue('seo_canonical')['prev']) {?><link rel="prev" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['prev']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
        <?php if ($_smarty_tpl->getValue('seo_canonical')['next']) {?><link rel="next" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('seo_canonical')['next']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php }
}
}
}
}
