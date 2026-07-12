<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:addons/gift_certificates/hooks/orders/search_form.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46792214f6_64064380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a082c5dd11e7b5ce85a0daa35be7896b91eb180' => 
    array (
      0 => 'addons/gift_certificates/hooks/orders/search_form.post.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46792214f6_64064380 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/gift_certificates/hooks/orders';
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code','purchased','used'));
?>
<label class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_cert_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
<div class="controls search-field">
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['gift_cert_code']), ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->getValue('search')['gift_cert_in'] == "B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("purchased", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
        <option value="U" <?php if ($_smarty_tpl->getValue('search')['gift_cert_in'] == "U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("used", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
    </select>
</div><?php }
}
