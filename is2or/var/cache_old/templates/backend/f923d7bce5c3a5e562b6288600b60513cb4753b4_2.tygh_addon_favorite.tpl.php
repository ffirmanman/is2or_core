<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_favorite.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc96abc1_88089148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f923d7bce5c3a5e562b6288600b60513cb4753b4' => 
    array (
      0 => 'views/addons/components/addons/addon_favorite.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cc96abc1_88089148 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
\Tygh\Languages\Helper::preloadLangVars(array('add_addon_to_favorites','remove_addon_from_favorites','favorites'));
$_smarty_tpl->assign('show_favorite', (($tmp = $_smarty_tpl->getValue('show_favorite') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('show_favorite')) {?>
    <?php if ($_smarty_tpl->getValue('a')['is_favorite'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->assign('new_favorite_status', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('new_favorite_status', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php }?>
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.set_favorite")), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="addons_set_favorite"
        class="form-edit form-horizontal cm-ajax form--no-margin"
        enctype="multipart/form-data"
    >
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_ids')), ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="addon" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['addon']), ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="favorite" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('new_favorite_status')), ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="detailed" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('detailed')), ENT_QUOTES, 'UTF-8');?>
"/>

        <button type="submit" class="btn btn-link btn-mini link--monochrome">
            <?php ob_start();
if ($_smarty_tpl->getValue('a')['is_favorite'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {
echo " hidden";
}
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->assign('icon_star_empty', "icon-star-empty".$_prefixVariable19, false, NULL);?>
            <?php ob_start();
if ($_smarty_tpl->getValue('a')['is_favorite'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {
echo " hidden";
}
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->assign('icon_star', "icon-star".$_prefixVariable20, false, NULL);?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_star_empty'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_addon_to_favorites", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_star'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_addon_from_favorites", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

        </button>

                <span class="hidden">
            <?php if ($_smarty_tpl->getValue('a')['is_favorite'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("favorites", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
        </span>
    </form>
<?php }
}
}
