<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:47:13
  from 'tygh:blocks/static_templates/404.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada81151d670_14892355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5508ad681761c48c6858164a81c7ffa930defac' => 
    array (
      0 => 'blocks/static_templates/404.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada81151d670_14892355 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('exception_error','exception_title','access_denied_text','page_not_found_text','exception_error_code','access_denied','page_not_found','go_to_the_homepage','go_back','exception_error','exception_title','access_denied_text','page_not_found_text','exception_error_code','access_denied','page_not_found','go_to_the_homepage','go_back'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-exception">
    <div class="ty-exception__code">
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('exception_status')), ENT_QUOTES, 'UTF-8');?>

        <span class="ty-exception__code-txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("exception_error", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
    <div class="ty-exception__title-info">
        <h1 class="ty-exception__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("exception_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h1>
        <p class="ty-exception__info">
            <?php if ((defined('HTTPS') ? constant('HTTPS') : null) === true) {?>
                <?php $_smarty_tpl->assign('return_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['https_location']), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('return_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['http_location']), false, NULL);?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('exception_status') == "403") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("access_denied_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } elseif ($_smarty_tpl->getValue('exception_status') == "404") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("page_not_found_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
        </p>

        <p class="ty-exception__info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("exception_error_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php if ($_smarty_tpl->getValue('exception_status') == "403") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("access_denied", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } elseif ($_smarty_tpl->getValue('exception_status') == "404") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("page_not_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
        </p>
        <ul class="ty-exception__links">
            <li class="ty-exception__links-item">
                <a class="ty-exception__links-a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('return_url')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_the_homepage", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </li>
            <li class="ty-exception__links-item" id="go_back">
                <a class="ty-exception__links-a cm-back-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_back", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </li>
        </ul>
    </div>
</div>
<?php echo '<script'; ?>
>
    
    Tygh.$(document).ready(function() {
        var $ = Tygh.$;
        $.each($.browser, function(i, val) {
            if (history.length == 1) {
                $('#go_back').hide();
            }
        });
    });
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/404.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/404.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-exception">
    <div class="ty-exception__code">
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('exception_status')), ENT_QUOTES, 'UTF-8');?>

        <span class="ty-exception__code-txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("exception_error", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
    <div class="ty-exception__title-info">
        <h1 class="ty-exception__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("exception_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h1>
        <p class="ty-exception__info">
            <?php if ((defined('HTTPS') ? constant('HTTPS') : null) === true) {?>
                <?php $_smarty_tpl->assign('return_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['https_location']), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('return_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['http_location']), false, NULL);?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('exception_status') == "403") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("access_denied_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } elseif ($_smarty_tpl->getValue('exception_status') == "404") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("page_not_found_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
        </p>

        <p class="ty-exception__info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("exception_error_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php if ($_smarty_tpl->getValue('exception_status') == "403") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("access_denied", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } elseif ($_smarty_tpl->getValue('exception_status') == "404") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("page_not_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
        </p>
        <ul class="ty-exception__links">
            <li class="ty-exception__links-item">
                <a class="ty-exception__links-a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('return_url')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_the_homepage", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </li>
            <li class="ty-exception__links-item" id="go_back">
                <a class="ty-exception__links-a cm-back-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_back", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </li>
        </ul>
    </div>
</div>
<?php echo '<script'; ?>
>
    
    Tygh.$(document).ready(function() {
        var $ = Tygh.$;
        $.each($.browser, function(i, val) {
            if (history.length == 1) {
                $('#go_back').hide();
            }
        });
    });
    
<?php echo '</script'; ?>
>
<?php }
}
}
