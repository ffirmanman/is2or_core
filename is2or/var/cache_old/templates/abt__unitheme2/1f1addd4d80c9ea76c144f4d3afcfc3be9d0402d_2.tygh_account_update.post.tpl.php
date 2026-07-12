<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:38
  from 'tygh:addons/hybrid_auth/hooks/profiles/account_update.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabe1644b7_27341257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f1addd4d80c9ea76c144f4d3afcfc3be9d0402d' => 
    array (
      0 => 'addons/hybrid_auth/hooks/profiles/account_update.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/hybrid_auth/views/auth/components/login_buttons.tpl' => 2,
  ),
))) {
function content_69adaabe1644b7_27341257 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hybrid_auth/hooks/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.link_provider','hybrid_auth.text_link_provider','hybrid_auth.linked_provider','hybrid_auth.not_linked_provider','hybrid_auth.link_provider','hybrid_auth.text_link_provider','hybrid_auth.linked_provider','hybrid_auth.not_linked_provider'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('providers_list')) {?>
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.link_provider", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.text_link_provider", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>

            <div class="clearfix ty-hybrid-auth__icon-container" id="hybrid_providers">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('providers_list'), 'provider_data');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach22DoElse = false;
?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('provider_data')['provider'],$_smarty_tpl->getValue('linked_providers'))) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-unlink-provider ty-hybrid-auth__remove" data-idp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider_id']), ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"), $_smarty_tpl);?>
</a>
                            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['icon']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.linked_provider", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" alt="<?php if ($_smarty_tpl->getValue('provider_data')['display_name'] && $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name']) !== $_smarty_tpl->getValue('provider_data')['provider']) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');
}?>"/>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <div class="ty-hybrid-auth__icon ty-float-left">&nbsp;</div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('providers_list'), 'provider_data');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach23DoElse = false;
?>
                    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('provider_data')['provider'],$_smarty_tpl->getValue('linked_providers'))) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-link-provider ty-link-unlink-provider" data-idp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider_id']), ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-plus-circle ty-hybrid-auth__add"), $_smarty_tpl);?>

                                <img
                                    src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['icon']), ENT_QUOTES, 'UTF-8');?>
"
                                    title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.not_linked_provider", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                                    alt="<?php if ($_smarty_tpl->getValue('provider_data')['display_name'] && $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name']) !== $_smarty_tpl->getValue('provider_data')['provider']) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');
}?>"
                                />
                            </a>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <!--hybrid_providers--></div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/hybrid_auth/views/auth/components/login_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/profiles/account_update.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hybrid_auth/hooks/profiles/account_update.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('providers_list')) {?>
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.link_provider", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.text_link_provider", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>

            <div class="clearfix ty-hybrid-auth__icon-container" id="hybrid_providers">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('providers_list'), 'provider_data');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach24DoElse = false;
?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('provider_data')['provider'],$_smarty_tpl->getValue('linked_providers'))) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-unlink-provider ty-hybrid-auth__remove" data-idp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider_id']), ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"), $_smarty_tpl);?>
</a>
                            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['icon']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.linked_provider", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" alt="<?php if ($_smarty_tpl->getValue('provider_data')['display_name'] && $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name']) !== $_smarty_tpl->getValue('provider_data')['provider']) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');
}?>"/>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <div class="ty-hybrid-auth__icon ty-float-left">&nbsp;</div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('providers_list'), 'provider_data');
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach25DoElse = false;
?>
                    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('provider_data')['provider'],$_smarty_tpl->getValue('linked_providers'))) {?>
                        <div class="ty-hybrid-auth__icon ty-float-left">
                            <a class="cm-link-provider ty-link-unlink-provider" data-idp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider_id']), ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-plus-circle ty-hybrid-auth__add"), $_smarty_tpl);?>

                                <img
                                    src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['icon']), ENT_QUOTES, 'UTF-8');?>
"
                                    title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.not_linked_provider", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                                    alt="<?php if ($_smarty_tpl->getValue('provider_data')['display_name'] && $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name']) !== $_smarty_tpl->getValue('provider_data')['provider']) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('provider_data')['display_name'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');
}?>"
                                />
                            </a>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <!--hybrid_providers--></div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/hybrid_auth/views/auth/components/login_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
}
}
}
