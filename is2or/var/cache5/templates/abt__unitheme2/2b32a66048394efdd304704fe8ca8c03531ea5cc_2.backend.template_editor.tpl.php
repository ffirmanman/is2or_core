<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:27:22
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/template_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bdba619d09_68405681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b32a66048394efdd304704fe8ca8c03531ea5cc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/template_editor.tpl',
      1 => 1728377996,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_6835bdba619d09_68405681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_editor','templates_tree','save','restore_from_repository','text_page_changed','text_restore_question','text_template_changed'));
?>
<div id="template_list_menu" class="ty-template-list-menu"><div></div><ul class="ty-float-left"><li></li></ul></div>

<div id="template_editor_content" title="<?php echo $_smarty_tpl->__("file_editor");?>
" class="hidden">

    <div class="ty-templates clearfix">
            <div class="ty-templates__tree">
                <h4 class="ty-templates__tree-title"><?php echo $_smarty_tpl->__("templates_tree");?>
</h4>
                <div class="ty-templates__tree-wrapper">
                    <ul id="template_list" class="ty-templates__list">
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="ty-templates__content">
                <div id="template_text" class="ty-templates__text"></div>
            </div>
    </div>

    <div class="ty-templates__buttons buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_js'=>true,'but_close_text'=>$_smarty_tpl->__("save"),'but_close_onclick'=>"fn_save_template();",'but_onclick'=>"fn_restore_template();",'but_text'=>$_smarty_tpl->__("restore_from_repository")), 0, false);
?>
    </div>

</div>

<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/design_mode.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
var current_url = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
';
Tygh.tr('text_page_changed', '<?php echo strtr((string)$_smarty_tpl->__("text_page_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
Tygh.tr('text_restore_question', '<?php echo strtr((string)$_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
Tygh.tr('text_template_changed', '<?php echo strtr((string)$_smarty_tpl->__("text_template_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
<?php echo '</script'; ?>
>
<?php }
}
