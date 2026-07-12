<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:12
  from 'tygh:views/checkout/components/applied_promotions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29c01cb58_18698458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '181cd16ed1f003042f9cbfd3782314f67aacc46b' => 
    array (
      0 => 'views/checkout/components/applied_promotions.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea29c01cb58_18698458 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components';
\Tygh\Languages\Helper::preloadLangVars(array('text_applied_promotions','text_applied_promotions'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="applied_promotions">
    <span class="ty-applied-promotions__title ty-strong"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_applied_promotions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    <ul>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['applied_promotions'], 'promotion');
$foreach52DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('promotion')->value) {
$foreach52DoElse = false;
?>
        <li class="ty-applied-promotions__item">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('promotion')['short_description']))) {?>
                <a id="sw_promo_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['promotion_id']), ENT_QUOTES, 'UTF-8');?>
"class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->getValue('promotion')['name'];?>
</a>
                <div id="promo_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['promotion_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content hidden"><?php echo $_smarty_tpl->getValue('promotion')['short_description'];?>
</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getValue('promotion')['name'];?>

            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<!--applied_promotions--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/applied_promotions.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/applied_promotions.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="applied_promotions">
    <span class="ty-applied-promotions__title ty-strong"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_applied_promotions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    <ul>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['applied_promotions'], 'promotion');
$foreach53DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('promotion')->value) {
$foreach53DoElse = false;
?>
        <li class="ty-applied-promotions__item">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('promotion')['short_description']))) {?>
                <a id="sw_promo_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['promotion_id']), ENT_QUOTES, 'UTF-8');?>
"class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->getValue('promotion')['name'];?>
</a>
                <div id="promo_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['promotion_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content hidden"><?php echo $_smarty_tpl->getValue('promotion')['short_description'];?>
</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getValue('promotion')['name'];?>

            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<!--applied_promotions--></div><?php }
}
}
