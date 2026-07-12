<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/ajax_select_object.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46790636f3_92908708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b5a7d4b39ddceb3d0f9118c1d52c28bebc4ddf' => 
    array (
      0 => 'common/ajax_select_object.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46790636f3_92908708 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','loading'));
$_smarty_tpl->assign('relative_dropdown', (($tmp = $_smarty_tpl->getValue('relative_dropdown') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ajax_select_content", null, null);?>

<a <?php if ($_smarty_tpl->getValue('span_wrapping') == false) {?>id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_wrap_"<?php }?> class="<?php if ($_smarty_tpl->getValue('type') != "list") {?>btn btn-link link--monochrome<?php }?> dropdown-toggle" data-toggle="dropdown">
    <?php if ($_smarty_tpl->getValue('span_wrapping')) {?>
        <span id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_wrap_"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('text'),40,"...",true)), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->getValue('dropdown_icon')) {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('dropdown_icon'))." dropdown-menu__icon"), $_smarty_tpl);?>

        <?php }?>
        <b class="caret"></b>
    <?php } else { ?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('text'),40,"...",true)), ENT_QUOTES, 'UTF-8');?>

        <?php if ($_smarty_tpl->getValue('dropdown_icon')) {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('dropdown_icon'))." dropdown-menu__icon"), $_smarty_tpl);?>

        <?php }?>
        <b class="caret"></b>
    <?php }?>
</a>

<?php if ($_smarty_tpl->getValue('label')) {?><label><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label')), ENT_QUOTES, 'UTF-8');?>
</label><?php }?>

<?php if ($_smarty_tpl->getValue('js_action')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.picker_js_action_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', function(elm) {
        <?php echo $_smarty_tpl->getValue('js_action');?>

    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

<ul
    class="dropdown-menu <?php if ($_smarty_tpl->getValue('type') == "opened") {?>dropdown-opened<?php }?>"
    id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_ajax_select_object"
    <?php if ($_smarty_tpl->getValue('extra_data_old_id')) {?>data-ca-target-old-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_data_old_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('extra_data_new_id')) {?>data-ca-target-new-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_data_new_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
>
    <li>
        <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_wrap_" class="search-shop cm-smart-position">
            <input type="text" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_field", [], $_smarty_tpl->getSmarty()->getLanguage());?>
..." class="span3 input-text cm-ajax-content-input" data-ca-target-id="content_loader_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" size="16">
        </div>
    </li>
    <li>
        <div class="ajax-popup-tools" id="scroller_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
            <ul class="cm-select-list" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('objects'), 'item', false, 'object_id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('object_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
                    <?php $_smarty_tpl->assign('name', $_smarty_tpl->getValue('item')['name'], false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('name', $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['name'],40,"...",true), false, NULL);?>
                <?php }?>
                <li>
                    <a data-ca-action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['value']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['name']), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->getValue('object_type') === "companies" && $_smarty_tpl->getValue('item')['storefront_status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("StorefrontStatuses::CLOSED")) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-lock dropdown-menu__item-icon"), $_smarty_tpl);?>

                        <?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></ul>
            <ul>
                <li id="content_loader_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax-content-more ajax-content-more" <?php if ($_smarty_tpl->getValue('data_url')) {?>data-ca-target-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('data_url'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_elm')), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></li>
            </ul>
        </div>
    </li>
    <?php echo $_smarty_tpl->getValue('extra_content');?>

</ul>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('type') == 'list') {?>
    <li class="<?php if ($_smarty_tpl->getValue('relative_dropdown')) {?>dropdown<?php }?> vendor-submenu"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ajax_select_content');?>
</li>
<?php } else { ?>
    <div class="<?php if ($_smarty_tpl->getValue('relative_dropdown')) {?>btn-group<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ajax_select_content');?>
</div>
<?php }
}
}
