<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:08:31
  from 'tygh:addons/is2or_claid_ai/hooks/products/add_to_cart.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9effb6c672_66521637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b427c12a7df49b63ebff21ca1b883290acf69c' => 
    array (
      0 => 'addons/is2or_claid_ai/hooks/products/add_to_cart.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9effb6c672_66521637 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_claid_ai/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['tryon_enabled'] && $_smarty_tpl->getValue('product')['garments']) {?>
    <div class="hidden" id="is2or_tryon_result_dialog">
        <div style="padding-bottom: 10px;">
            <img id="is2or_tryon_result_image" style="max-height: 70vh; max-width: 100%;" />

            <div class="buttons-container">
                <div class="ty-float-right">
                    <button type="button" class="ty-btn cm-dialog-closer" style="margin-bottom: 0;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('close', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
                </div>
            </div>
        </div>
    </div>
    <button style="display: none;" class="cm-dialog-opener cm-dialog-auto-size" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.result', [], $_smarty_tpl->getSmarty()->getLanguage());?>
" data-ca-target-id="is2or_tryon_result_dialog" id="is2or_tryon_result_dialog_opener">&nbsp;</button>

    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("is2or_tryon.index?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__tertiary cm-dialog-opener cm-dialog-destroy-on-close" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.tryon', [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="is2or_tryon"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.tryon', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form")), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__tertiary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.tryon', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_claid_ai/hooks/products/add_to_cart.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_claid_ai/hooks/products/add_to_cart.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['tryon_enabled'] && $_smarty_tpl->getValue('product')['garments']) {?>
    <div class="hidden" id="is2or_tryon_result_dialog">
        <div style="padding-bottom: 10px;">
            <img id="is2or_tryon_result_image" style="max-height: 70vh; max-width: 100%;" />

            <div class="buttons-container">
                <div class="ty-float-right">
                    <button type="button" class="ty-btn cm-dialog-closer" style="margin-bottom: 0;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('close', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
                </div>
            </div>
        </div>
    </div>
    <button style="display: none;" class="cm-dialog-opener cm-dialog-auto-size" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.result', [], $_smarty_tpl->getSmarty()->getLanguage());?>
" data-ca-target-id="is2or_tryon_result_dialog" id="is2or_tryon_result_dialog_opener">&nbsp;</button>

    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("is2or_tryon.index?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__tertiary cm-dialog-opener cm-dialog-destroy-on-close" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.tryon', [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="is2or_tryon"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.tryon', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form")), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__tertiary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_claid_ai.tryon', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }
}
}
}
}
