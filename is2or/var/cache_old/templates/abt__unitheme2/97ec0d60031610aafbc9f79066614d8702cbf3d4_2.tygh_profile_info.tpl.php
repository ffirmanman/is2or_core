<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:38
  from 'tygh:blocks/static_templates/profile_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabe1bf5a4_10589586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97ec0d60031610aafbc9f79066614d8702cbf3d4' => 
    array (
      0 => 'blocks/static_templates/profile_info.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69adaabe1bf5a4_10589586 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('text_profile_benefits','text_profile_details','text_profile_benefits','text_profile_details'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['controller'] === 'profiles') {?>
    <?php if ($_smarty_tpl->getValue('runtime')['mode'] === 'add') {?>
    <div class="ty-account-benefits">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_profile_benefits", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>

    <?php } elseif ($_smarty_tpl->getValue('runtime')['mode'] == 'update') {?>
        <div class="ty-account-detail">
            <div>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
            <div class="ty-account-detail__image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>array("image_path"=>((string)$_smarty_tpl->getValue('images_dir'))."/profile_details.png","image_x"=>183,"image_y"=>206)), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/profile_info.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/profile_info.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['controller'] === 'profiles') {?>
    <?php if ($_smarty_tpl->getValue('runtime')['mode'] === 'add') {?>
    <div class="ty-account-benefits">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_profile_benefits", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>

    <?php } elseif ($_smarty_tpl->getValue('runtime')['mode'] == 'update') {?>
        <div class="ty-account-detail">
            <div>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
            <div class="ty-account-detail__image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>array("image_path"=>((string)$_smarty_tpl->getValue('images_dir'))."/profile_details.png","image_x"=>183,"image_y"=>206)), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    <?php }
}
}
}
}
