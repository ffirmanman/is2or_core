<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:components/context_menu/status_selector.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a7d7507_66725502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d0f615b833e1f2c671863cd934f30c26893eb8d' => 
    array (
      0 => 'components/context_menu/status_selector.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
  ),
))) {
function content_69ae467a7d7507_66725502 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/context_menu';
\Tygh\Languages\Helper::preloadLangVars(array('selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--check-items">
    <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler"
           type="checkbox"
           checked
           data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]"
           data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
    />
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
        <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span> <span class="caret mobile-hide"></span>
    </span>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->getValue('statuses'),'is_check_all_shown'=>(($tmp = $_smarty_tpl->getValue('params')['is_check_all_shown'] ?? null)===null||$tmp==='' ? false ?? null : $tmp),'elms_container'=>$_smarty_tpl->getValue('elms_container')), (int) 0, $_smarty_current_dir);
?>
</li><?php }
}
