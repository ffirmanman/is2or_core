<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:15
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/common/company_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96072d2674_65267049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6faac1cfb1d4eab11472464d7e0f647701134129' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/common/company_data.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ad96072d2674_65267049 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/common';
\Tygh\Languages\Helper::preloadLangVars(array('more','product_s','more','product_s'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('obj_id', (($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('company')['company_id'] ?? null : $tmp), false, NULL);?>

<?php if (((true && ($_smarty_tpl->hasVariable('hide_links') && null !== ($_smarty_tpl->getValue('hide_links') ?? null))) && !(true && ($_smarty_tpl->hasVariable('show_links') && null !== ($_smarty_tpl->getValue('show_links') ?? null))))) {?>
    <?php $_smarty_tpl->assign('show_links', !$_smarty_tpl->getValue('hide_links'), false, NULL);
} elseif (((true && ($_smarty_tpl->hasVariable('show_links') && null !== ($_smarty_tpl->getValue('show_links') ?? null))) && !(true && ($_smarty_tpl->hasVariable('hide_links') && null !== ($_smarty_tpl->getValue('hide_links') ?? null))))) {?>
    <?php $_smarty_tpl->assign('hide_links', !$_smarty_tpl->getValue('show_links'), false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "name_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_name')) {?>
        <?php if (!$_smarty_tpl->getValue('show_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title"><?php }
echo $_smarty_tpl->getValue('company')['company'];
if (!$_smarty_tpl->getValue('show_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->getValue('show_trunc_name')) {?>
        <?php if (!$_smarty_tpl->getValue('show_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('company')['company'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('company')['company'],45,"...",true);
if (!$_smarty_tpl->getValue('show_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "vendor_rating_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:vendor_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:vendor_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "vendor_rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "company_descr_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_descr')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('company')['company_description']),1024);
if ($_smarty_tpl->getValue('show_links') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_strlen')($_smarty_tpl->getValue('company')['company_description']) > 1024) {?> <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "company_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_count_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_products_count')) {?>
        <?php if (!$_smarty_tpl->getValue('show_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-total-products"><?php }
echo $_smarty_tpl->getValue('company')['products_count'];?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_s", [], $_smarty_tpl->getSmarty()->getLanguage());
if (!$_smarty_tpl->getValue('show_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "products_count_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "address_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_address')) {?>
        <?php echo $_smarty_tpl->getValue('company')['address'];?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "address_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "city_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_city')) {?>
        <?php echo $_smarty_tpl->getValue('company')['city'];?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "city_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "country_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_country')) {?>
        <?php echo $_smarty_tpl->getValue('company')['country'];?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "country_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "location_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_location')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']) && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['country'])) {?>, <?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['country']);?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "location_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "location_full_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_location_full')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']) && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['state'])) {?>, <?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_state_name')($_smarty_tpl->getValue('company')['state'],$_smarty_tpl->getValue('company')['country'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['zipcode']);?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "location_full_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "logo_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_logo')) {?>
        <?php if ($_smarty_tpl->getValue('show_links')) {?><a class="ty-company-image-wrapper" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('company')['logos']['theme']['image'],'image_width'=>"240",'class'=>"ty-company-image"), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('show_links')) {?></a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "logo_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/common/company_data.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/common/company_data.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('obj_id', (($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('company')['company_id'] ?? null : $tmp), false, NULL);?>

<?php if (((true && ($_smarty_tpl->hasVariable('hide_links') && null !== ($_smarty_tpl->getValue('hide_links') ?? null))) && !(true && ($_smarty_tpl->hasVariable('show_links') && null !== ($_smarty_tpl->getValue('show_links') ?? null))))) {?>
    <?php $_smarty_tpl->assign('show_links', !$_smarty_tpl->getValue('hide_links'), false, NULL);
} elseif (((true && ($_smarty_tpl->hasVariable('show_links') && null !== ($_smarty_tpl->getValue('show_links') ?? null))) && !(true && ($_smarty_tpl->hasVariable('hide_links') && null !== ($_smarty_tpl->getValue('hide_links') ?? null))))) {?>
    <?php $_smarty_tpl->assign('hide_links', !$_smarty_tpl->getValue('show_links'), false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "name_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_name')) {?>
        <?php if (!$_smarty_tpl->getValue('show_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title"><?php }
echo $_smarty_tpl->getValue('company')['company'];
if (!$_smarty_tpl->getValue('show_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->getValue('show_trunc_name')) {?>
        <?php if (!$_smarty_tpl->getValue('show_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('company')['company'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('company')['company'],45,"...",true);
if (!$_smarty_tpl->getValue('show_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "vendor_rating_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:vendor_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:vendor_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "vendor_rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "company_descr_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_descr')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('company')['company_description']),1024);
if ($_smarty_tpl->getValue('show_links') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_strlen')($_smarty_tpl->getValue('company')['company_description']) > 1024) {?> <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "company_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_count_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_products_count')) {?>
        <?php if (!$_smarty_tpl->getValue('show_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-total-products"><?php }
echo $_smarty_tpl->getValue('company')['products_count'];?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_s", [], $_smarty_tpl->getSmarty()->getLanguage());
if (!$_smarty_tpl->getValue('show_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "products_count_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "address_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_address')) {?>
        <?php echo $_smarty_tpl->getValue('company')['address'];?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "address_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "city_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_city')) {?>
        <?php echo $_smarty_tpl->getValue('company')['city'];?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "city_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "country_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_country')) {?>
        <?php echo $_smarty_tpl->getValue('company')['country'];?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "country_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "location_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_location')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']) && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['country'])) {?>, <?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['country']);?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "location_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "location_full_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_location_full')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['city']) && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['state'])) {?>, <?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_state_name')($_smarty_tpl->getValue('company')['state'],$_smarty_tpl->getValue('company')['country'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company')['zipcode']);?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "location_full_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "logo_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_logo')) {?>
        <?php if ($_smarty_tpl->getValue('show_links')) {?><a class="ty-company-image-wrapper" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('company')['logos']['theme']['image'],'image_width'=>"240",'class'=>"ty-company-image"), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('show_links')) {?></a><?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "logo_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
