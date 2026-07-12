<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/quick_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2b9e5b3_58988020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0c03509197bcc5813bc8f0432ed2f6782f7203' => 
    array (
      0 => 'common/quick_menu.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/select_object.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
))) {
function content_6a133ed2b9e5b3_58988020 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('editing_quick_menu_section','new_section','editing_quick_menu_link','new_link','remove_this_item','remove_this_item','add_link','add_section','close','name','link','position','use_current_link'));
?>
<!-- quick menu -->
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')("tools.show_quick_menu")) {?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
    Tygh.tr('editing_quick_menu_section', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_quick_menu_section", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
');
    Tygh.tr('new_section', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("new_section", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
');
    Tygh.tr('editing_quick_menu_link', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_quick_menu_link", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
');
    Tygh.tr('new_link', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("new_link", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
');
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<div class="hidden" id="content_quick_menu_edit">
    <div class="quick-menu-container" id="quick_menu">
        <div class="quick-menu quick-menu-show-on-hover">
            <div id="quick_menu_content" class="quick-menu-content cm-popup-box">
                <div class="menu-container table-responsive-wrapper">
                    <div class="table-wrapper">
                        <table width="100%" class="table table-middle">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('quick_menu'), 'sect', false, 'sect_id');
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect_id')->value => $_smarty_tpl->getVariable('sect')->value) {
$foreach34DoElse = false;
?>
                                <tr data-ca-qm-item="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect_id')), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-qm-parent-id="0"
                                    data-ca-qm-position="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect')['section']['position']), ENT_QUOTES, 'UTF-8');?>
">
                                    <td class="section-header">
                                        <strong>
                                            <a class="cm-qm-name cm-update-item wrap link--monochrome" href="#"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect')['section']['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                                        </strong>
                                    </td>
                                    <td class="hidden-tools right">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"button-icon",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_this_item", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"btn cm-delete-section",'but_icon'=>"icon-trash"), (int) 0, $_smarty_current_dir);
?>
                                    </td>
                                </tr>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sect')['subsection'], 'subsect');
$foreach35DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subsect')->value) {
$foreach35DoElse = false;
?>
                                    <tr data-ca-qm-item="<?php echo $_smarty_tpl->getValue('subsect')['menu_id'];?>
"
                                        data-ca-qm-parent-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['parent_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-qm-position="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['position']), ENT_QUOTES, 'UTF-8');?>
">
                                        <td>
                                            <a class="cm-qm-name cm-update-item wrap shift-left link--monochrome"
                                                data-href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subsect')['url'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                                        </td>
                                        <td class="hidden-tools right">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"button-icon",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_this_item", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"btn cm-delete-section",'but_icon'=>"icon-trash"), (int) 0, $_smarty_current_dir);
?>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <tr data-ca-qm-item="<?php echo $_smarty_tpl->getValue('sect_id');?>
" data-ca-qm-parent-id="0"
                                    data-ca-qm-position="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect')['section']['position']), ENT_QUOTES, 'UTF-8');?>
">
                                    <td colspan="2">
                                        <a class="edit cm-add-link link--monochrome">
                                            <span class="flex-inline top">
                                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-plus"), $_smarty_tpl);?>

                                            </span>
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_link", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </a>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                </div>
                <div class="quick-menu-edit">
                    <a class="btn edit cm-add-section"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_section", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                </div>
            </div>
        </div>
    <!--quick_menu--></div>
    <div class="buttons-container">
	    <a class="cm-dialog-closer cm-cancel tool-link btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("close", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    </div>
<!--content_quick_menu_edit--></div>

<div id="quick_box" class="hidden quick-menu-popup cm-dialog-auto-size" data-ca-target-id="quick_box">

    <div id="quick_menu_language_selector">
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')("tools.get_quick_menu_variant","descr_sl="),'items'=>$_smarty_tpl->getValue('languages'),'selected_id'=>(defined('DESCR_SL') ? constant('DESCR_SL') : null),'key_name'=>"name",'suffix'=>"quick_menu",'display_icons'=>true,'select_container_id'=>"quick_menu_language_selector"), (int) 0, $_smarty_current_dir);
?>
    </div>

    <form class="cm-ajax form-horizontal form-edit" name="quick_menu_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input id="qm_item_id" type="hidden" name="item[id]" value=""/>
        <input id="qm_item_parent" type="hidden" name="item[parent_id]" value="0"/>
        <input id="qm_descr_sl" type="hidden" name="descr_sl" value=""/>
        <input type="hidden" name="result_ids" value="quick_menu"/>

        <div class="control-group">
            <label class="cm-required control-label" for="qm_item_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>

            <div class="controls">
                <input id="qm_item_name" name="item[name]" type="text" value="" size="40"/>
            </div>
        </div>

        <div class="control-group">
            <label class="cm-required control-label" for="qm_item_link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("link", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>

            <div class="controls">
                <input id="qm_item_link" name="item[url]" class="input-fill" type="text" value=""
                        size="40"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="qm_item_position"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("position", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>

            <div class="controls">
                <input id="qm_item_position" name="item[position]" type="text" value="" size="6"/>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <a id="qm_current_link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("use_current_link", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>

        <div class="buttons-container">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[tools.update_quick_menu_item.edit]",'cancel_action'=>"close",'save'=>true), (int) 0, $_smarty_current_dir);
?>
        </div>

    </form>
</div>
<?php }?>
<!-- end quick menu -->
<?php }
}
