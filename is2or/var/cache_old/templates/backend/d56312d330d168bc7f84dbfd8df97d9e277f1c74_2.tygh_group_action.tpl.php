<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:components/context_menu/items/group_action.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a88b9b3_89076250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56312d330d168bc7f84dbfd8df97d9e277f1c74' => 
    array (
      0 => 'components/context_menu/items/group_action.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae467a88b9b3_89076250 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/context_menu/items';
?>
<li <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('data')['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->getValue('data')['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data')['menu_item_class']), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('data')['action_attributes']);?>

            <?php if (!$_smarty_tpl->getValue('data')['action_attributes']['class']) {?>
                class="cm-process-items cm-submit <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data')['action_class']), ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->getValue('data')['action_attributes']["data-ca-target-form"]) {?>
                data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('params')['form']), ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->getValue('data')['action_attributes']["data-ca-dispatch"]) {?>
                data-ca-dispatch="dispatch[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data')['dispatch']), ENT_QUOTES, 'UTF-8');?>
]"
            <?php }?>
    >
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('data')['name']['template'], $_smarty_tpl->getValue('data')['name']['params'], $_smarty_tpl->getSmarty()->getLanguage());?>

    </a>
</li>
<?php }
}
