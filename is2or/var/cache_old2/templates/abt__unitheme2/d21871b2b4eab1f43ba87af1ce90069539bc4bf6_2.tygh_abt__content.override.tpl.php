<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:addons/abt__unitheme2/hooks/grid/abt__content.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa8e0a6b3_35474227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd21871b2b4eab1f43ba87af1ce90069539bc4bf6' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/grid/abt__content.override.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tabsbox.tpl' => 2,
    'tygh:views/block_manager/extract_nested_forms.tpl' => 2,
  ),
))) {
function content_69afafa8e0a6b3_35474227 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/grid';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('grid')['parent_id']) {?>
    <?php if ($_smarty_tpl->getValue('grid')['alpha']) {?><div class="container-fluid-row<?php if ($_smarty_tpl->getValue('grid')['abt__ut2_extended'] == "E") {?> container-fluid-row-full-width <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('grid')['abt__ut2_extended'] == "F") {?> container-fluid-row-no-limit <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><?php }
}?>

<?php if ($_smarty_tpl->getValue('grid')['alpha']) {?><div class="<?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
    <?php $_smarty_tpl->assign('width', (($tmp = $_smarty_tpl->getValue('fluid_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('grid')['width'] ?? null : $tmp), false, NULL);?>
    <div class="span<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('grid')['offset']) {?> offset<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['offset']), ENT_QUOTES, 'UTF-8');
}
if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('grid')['abt__ut2_extended'],array('E','F'))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['abt__ut2_padding']), ENT_QUOTES, 'UTF-8');?>
" >
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('grid')['abt__ut2_show_blocks_in_tabs'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITHOUT_LAZY_LOAD"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITH_LAZY_LOAD")))) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('grid')['wrapper']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/extract_nested_forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wrapper'=>$_smarty_tpl->getValue('grid')['wrapper'],'content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('grid')['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getValue('content');?>

        <?php }?>
    </div>
<?php if ($_smarty_tpl->getValue('grid')['omega']) {?></div><?php }?>

<?php if (!$_smarty_tpl->getValue('grid')['parent_id']) {?>
    <?php if ($_smarty_tpl->getValue('grid')['omega']) {?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/grid/abt__content.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/grid/abt__content.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('grid')['parent_id']) {?>
    <?php if ($_smarty_tpl->getValue('grid')['alpha']) {?><div class="container-fluid-row<?php if ($_smarty_tpl->getValue('grid')['abt__ut2_extended'] == "E") {?> container-fluid-row-full-width <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('grid')['abt__ut2_extended'] == "F") {?> container-fluid-row-no-limit <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><?php }
}?>

<?php if ($_smarty_tpl->getValue('grid')['alpha']) {?><div class="<?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
    <?php $_smarty_tpl->assign('width', (($tmp = $_smarty_tpl->getValue('fluid_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('grid')['width'] ?? null : $tmp), false, NULL);?>
    <div class="span<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('grid')['offset']) {?> offset<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['offset']), ENT_QUOTES, 'UTF-8');
}
if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('grid')['abt__ut2_extended'],array('E','F'))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['abt__ut2_padding']), ENT_QUOTES, 'UTF-8');?>
" >
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('grid')['abt__ut2_show_blocks_in_tabs'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITHOUT_LAZY_LOAD"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITH_LAZY_LOAD")))) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('grid')['wrapper']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/extract_nested_forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wrapper'=>$_smarty_tpl->getValue('grid')['wrapper'],'content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('grid')['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getValue('content');?>

        <?php }?>
    </div>
<?php if ($_smarty_tpl->getValue('grid')['omega']) {?></div><?php }?>

<?php if (!$_smarty_tpl->getValue('grid')['parent_id']) {?>
    <?php if ($_smarty_tpl->getValue('grid')['omega']) {?></div><?php }
}
}
}
}
