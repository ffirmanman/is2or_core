<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/advanced_search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467924d153_59465034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3838401d27b847f8866aac47e560a89ae51be293' => 
    array (
      0 => 'common/advanced_search.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 3,
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69ae467924d153_59465034 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('object_exists','advanced_search','advanced_search','save_this_search_as','name','name','save','cancel','advanced_search_options'));
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/advanced_search.js"), $_smarty_tpl);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
Tygh.tr('object_exists', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("object_exists", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
');
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<input type="hidden" name="is_search" value="Y" />
<?php $_smarty_tpl->assign('a_id', sprintf("s_%s",$_smarty_tpl->getSmarty()->getModifierCallback('fn_crc32')($_smarty_tpl->getValue('dispatch'))), false, NULL);
$_smarty_tpl->assign('views', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_views')((($tmp = $_smarty_tpl->getValue('view_type') ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), false, NULL);
$_smarty_tpl->assign('show_search_button', (($tmp = $_smarty_tpl->getValue('show_search_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_advanced_search_button_icon', (($tmp = $_smarty_tpl->getValue('show_advanced_search_button_icon') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_advanced_search_button_text', (($tmp = $_smarty_tpl->getValue('show_advanced_search_button_text') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('in_popup')) {?>
    <?php if ($_smarty_tpl->getValue('simple_search')) {?>
    <div id="simple_search_common">
        <div id="simple_search">
            <?php echo $_smarty_tpl->getValue('simple_search');?>

        </div>
    </div>
    <?php }?>
    <div class="sidebar-field advanced-search-field">
        <?php if ($_smarty_tpl->getValue('show_search_button')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]",'method'=>"GET",'but_meta'=>"advanced-search-field__search"), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php if (!$_smarty_tpl->getValue('no_adv_link')) {?>
            <a class="advanced-search cm-dialog-opener link--monochrome <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('advanced_search_button_class')), ENT_QUOTES, 'UTF-8');?>
"
                id="adv_search_opener"
                data-ca-target-id="adv_search"
                href="#"
            >
                <?php if ($_smarty_tpl->getValue('show_advanced_search_button_icon')) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"filter"), $_smarty_tpl);?>

                <?php }?>
                <?php if ($_smarty_tpl->getValue('show_advanced_search_button_text')) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("advanced_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php }?>
            </a>
        <?php }?>
    </div>

<div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_id')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="hidden adv-search" id="adv_search" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("advanced_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <?php if ($_smarty_tpl->getValue('simple_search')) {?>
            <div class="group" id="simple_search_popup"></div>
        <?php }?>

        <?php echo $_smarty_tpl->getValue('advanced_search');?>


        <div class="modal-footer buttons-container">
            <?php if (!$_smarty_tpl->getValue('not_saved')) {?>
                <div class="pull-left">
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_REQUEST['dispatch'],".picker") === false) {?>
                    <span class="pull-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_this_search_as", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <div class="input-append flex">
                    <input type="text" id="view_name" name="new_view" value="<?php if ($_smarty_tpl->getValue('search')['view_id'] && $_smarty_tpl->getValue('views')[$_smarty_tpl->getValue('search')['view_id']]) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('views')[$_smarty_tpl->getValue('search')['view_id']]['name']), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="input-medium cm-hint" />
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_id'=>"adv_search_save",'but_role'=>"advanced-search",'but_meta'=>"flex-shrink-none"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <div class="pull-right">
                <a class="cm-dialog-closer cm-cancel tool-link btn bulkedit-unchanged" data-dismiss="modal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]",'but_role'=>"submit",'method'=>"GET"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    </div>
</div>

<?php } else { ?>
    <?php echo $_smarty_tpl->getValue('simple_search');?>

    <div class="sidebar-field in-popup">
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]"), (int) 0, $_smarty_current_dir);
?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('advanced_search')) != '') {?>
        <a id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination cm-save-state" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("advanced_search_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
            <?php ob_start();
if ($_COOKIE[$_smarty_tpl->getValue('a_id')]) {
echo " hidden";
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->assign('icon_chevron_down', "icon-chevron-down cm-combination cm-save-state".$_prefixVariable5." flex-inline", false, NULL);?>
            <?php ob_start();
if (!$_COOKIE[$_smarty_tpl->getValue('a_id')]) {
echo " hidden";
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->assign('icon_chevron_up', "icon-chevron-up cm-combination cm-save-state".$_prefixVariable6." flex-inline", false, NULL);?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_chevron_down'),'id'=>"on_".((string)$_smarty_tpl->getValue('a_id'))), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_chevron_up'),'id'=>"off_".((string)$_smarty_tpl->getValue('a_id'))), $_smarty_tpl);?>

        </a>
    <?php }?>
    </div>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_id')), ENT_QUOTES, 'UTF-8');?>
" class="search-advanced <?php if (!$_COOKIE[$_smarty_tpl->getValue('a_id')]) {?>hidden<?php }?>">
        <?php echo $_smarty_tpl->getValue('advanced_search');?>

    </div>
<?php }
}
}
