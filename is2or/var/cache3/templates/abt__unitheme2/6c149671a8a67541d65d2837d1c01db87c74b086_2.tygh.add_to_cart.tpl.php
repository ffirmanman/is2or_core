<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/buttons/add_to_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6b440611_28432361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c149671a8a67541d65d2837d1c01db87c74b086' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/buttons/add_to_cart.tpl',
      1 => 1747962629,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_682fdd6b440611_28432361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','text_login_to_add_to_cart','add_to_cart','add_to_cart','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','text_login_to_add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"buttons:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_price_in_button']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_price_in_button", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
            <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['price']) > 0) {?>
                <?php $_smarty_tpl->_assignInScope('but_text', ((string)$_smarty_tpl->tpl_vars['but_text']->value)."&nbsp;-&nbsp;".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_price_in_button')));?>
                <?php $_smarty_tpl->_assignInScope('btn_nofilter', true);?>
            <?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon" || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon_button") {?>
                <?php $_smarty_tpl->_assignInScope('but_text', false);?>
                <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
            <?php } elseif ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "text") {?>
                <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
                <?php $_smarty_tpl->_assignInScope('but_icon', false);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
                <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('btn_nofilter', false);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'btn_nofilter'=>$_smarty_tpl->tpl_vars['btn_nofilter']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_meta'=>"ty-btn__primary ty-btn__add-to-cart cm-form-dialog-closer ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, false);
?>
    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {?>
            <?php $_smarty_tpl->_assignInScope('login_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('login_url', "auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_title'=>$_smarty_tpl->__("text_login_to_add_to_cart"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_name'=>'','but_meta'=>"cm-tooltip ty-btn__tertiary ut2-allow-shopping",'but_icon'=>"ut2-icon-outline-info"), 0, true);
?>
        <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('show_buy_now', $_smarty_tpl->tpl_vars['show_buy_now']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"buttons:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_price_in_button']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_price_in_button", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0, true);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
            <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['price']) > 0) {?>
                <?php $_smarty_tpl->_assignInScope('but_text', ((string)$_smarty_tpl->tpl_vars['but_text']->value)."&nbsp;-&nbsp;".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_price_in_button')));?>
                <?php $_smarty_tpl->_assignInScope('btn_nofilter', true);?>
            <?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon" || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon_button") {?>
                <?php $_smarty_tpl->_assignInScope('but_text', false);?>
                <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
            <?php } elseif ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "text") {?>
                <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
                <?php $_smarty_tpl->_assignInScope('but_icon', false);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
                <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('btn_nofilter', false);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'btn_nofilter'=>$_smarty_tpl->tpl_vars['btn_nofilter']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_meta'=>"ty-btn__primary ty-btn__add-to-cart cm-form-dialog-closer ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0, true);
?>
    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {?>
            <?php $_smarty_tpl->_assignInScope('login_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('login_url', "auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_title'=>$_smarty_tpl->__("text_login_to_add_to_cart"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_name'=>'','but_meta'=>"cm-tooltip ty-btn__tertiary ut2-allow-shopping",'but_icon'=>"ut2-icon-outline-info"), 0, true);
?>
        <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('show_buy_now', $_smarty_tpl->tpl_vars['show_buy_now']->value ,false ,2);
}
}
}
