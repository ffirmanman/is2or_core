<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/vendor_rating/components/relative_vendor_rating.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa673240_14674460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c7514307653949be3303370a55a0c4d8abe754' => 
    array (
      0 => 'addons/vendor_rating/components/relative_vendor_rating.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaa673240_14674460 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_rating/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_icon', true, false, NULL);
if ($_smarty_tpl->getValue('addons')['vendor_rating']['bronze_rating_lower_limit'] === $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] === $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'] && $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'] === "0") {?>
    <?php $_smarty_tpl->assign('show_icon', false, false, NULL);
}
if ($_smarty_tpl->getValue('show_icon') && ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] || $_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'] || $_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'])) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('vendor_rating.vendor_rating', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable21=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-vendor-rating ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_prefixVariable21.": ".((string)$_smarty_tpl->getValue('rating'))."%"), $_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('vendor_rating.vendor_rating', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable22=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-vendor-rating ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_prefixVariable22.": ".((string)$_smarty_tpl->getValue('rating'))."%"), $_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('vendor_rating.vendor_rating', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable23=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-vendor-rating ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_prefixVariable23.": ".((string)$_smarty_tpl->getValue('rating'))."%"), $_smarty_tpl);?>

        <?php }?>
    </span>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/components/relative_vendor_rating.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_rating/components/relative_vendor_rating.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_icon', true, false, NULL);
if ($_smarty_tpl->getValue('addons')['vendor_rating']['bronze_rating_lower_limit'] === $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] === $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'] && $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'] === "0") {?>
    <?php $_smarty_tpl->assign('show_icon', false, false, NULL);
}
if ($_smarty_tpl->getValue('show_icon') && ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] || $_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'] || $_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit'])) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('vendor_rating.vendor_rating', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable24=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-vendor-rating ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_prefixVariable24.": ".((string)$_smarty_tpl->getValue('rating'))."%"), $_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->getValue('rating') < $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('vendor_rating.vendor_rating', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable25=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-vendor-rating ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_prefixVariable25.": ".((string)$_smarty_tpl->getValue('rating'))."%"), $_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->getValue('rating') >= $_smarty_tpl->getValue('addons')['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('vendor_rating.vendor_rating', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable26=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-vendor-rating ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_prefixVariable26.": ".((string)$_smarty_tpl->getValue('rating'))."%"), $_smarty_tpl);?>

        <?php }?>
    </span>
<?php }
}
}
}
