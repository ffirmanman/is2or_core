<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:49:00
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/myfatoorah/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21c014890_40763350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a666a5e31b3f4386beee2aaf6ace59ec03b97e44' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/myfatoorah/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21c014890_40763350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['isApVisible']->value) {?>
    <?php echo smarty_function_script(array('src'=>$_smarty_tpl->tpl_vars['apScriptURL']->value),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isFormVisible']->value) {?>
    <?php echo smarty_function_script(array('src'=>$_smarty_tpl->tpl_vars['cvScriptURL']->value),$_smarty_tpl);?>

<?php } elseif (!empty($_smarty_tpl->tpl_vars['mfPaymentMethods']->value['all'])) {?>
    <?php $_smarty_tpl->_assignInScope('mfPaymentId', '');?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment'] == 'MyFatoorah') {
$_smarty_tpl->_assignInScope('mfPaymentId', $_smarty_tpl->tpl_vars['payment']->value['payment_id']);
}?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    <?php echo '<script'; ?>
>
        (function (_, $) {
            function mf_hidePlaceOrder(){
                if($('#radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mfPaymentId']->value, ENT_QUOTES, 'UTF-8');?>
').is(':checked')){
                    $('#litecheckout_place_order').hide();
                }
            }
            $.ceEvent('on', 'ce.loaderhide', function () {
                mf_hidePlaceOrder();
            });
            mf_hidePlaceOrder();
        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/myfatoorah/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/myfatoorah/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['isApVisible']->value) {?>
    <?php echo smarty_function_script(array('src'=>$_smarty_tpl->tpl_vars['apScriptURL']->value),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isFormVisible']->value) {?>
    <?php echo smarty_function_script(array('src'=>$_smarty_tpl->tpl_vars['cvScriptURL']->value),$_smarty_tpl);?>

<?php } elseif (!empty($_smarty_tpl->tpl_vars['mfPaymentMethods']->value['all'])) {?>
    <?php $_smarty_tpl->_assignInScope('mfPaymentId', '');?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment'] == 'MyFatoorah') {
$_smarty_tpl->_assignInScope('mfPaymentId', $_smarty_tpl->tpl_vars['payment']->value['payment_id']);
}?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    <?php echo '<script'; ?>
>
        (function (_, $) {
            function mf_hidePlaceOrder(){
                if($('#radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mfPaymentId']->value, ENT_QUOTES, 'UTF-8');?>
').is(':checked')){
                    $('#litecheckout_place_order').hide();
                }
            }
            $.ceEvent('on', 'ce.loaderhide', function () {
                mf_hidePlaceOrder();
            });
            mf_hidePlaceOrder();
        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
>
<?php }
}
}
}
