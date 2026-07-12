<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:views/addons/components/manage/addon_name_search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af4ab8f6_70273801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ebd0d9faa994b6122ddd7082dcb9fdc65d2e2d4' => 
    array (
      0 => 'views/addons/components/manage/addon_name_search.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1af4ab8f6_70273801 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','remove','addons.search_description'));
?>
<div class="sidebar-row addons-addon-name-search">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_meta')), ENT_QUOTES, 'UTF-8');?>
 form--no-margin">
        <div class="controls">
            <input type="text"
                name="q"
                id="elm_addon"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['q']), ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_field", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
            />
            <button type="button" class="hidden addons-addon-name-search__remove" id="elm_addon_clear" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove"), $_smarty_tpl);?>

            </button>
        </div>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.search_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>
</div>
<?php }
}
