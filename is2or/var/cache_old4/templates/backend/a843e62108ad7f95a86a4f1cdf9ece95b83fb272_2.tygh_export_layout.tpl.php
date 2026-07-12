<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:27
  from 'tygh:views/block_manager/components/export_layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb55332a8568_67097734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a843e62108ad7f95a86a4f1cdf9ece95b83fb272' => 
    array (
      0 => 'views/block_manager/components/export_layout.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
))) {
function content_69fb55332a8568_67097734 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/components';
\Tygh\Languages\Helper::preloadLangVars(array('general','block_manager.layout_pages','output','direct_download','server','screen','filename','export'));
$_smarty_tpl->assign('tabs_count', 1, false, NULL);?>

<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit " name="export_locations">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['layout_id']), ENT_QUOTES, 'UTF-8');?>
" />
<div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_count')), ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("general", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">

<div class="control-group cm-no-hide-input">
    <label for="locations_ids" class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.layout_pages", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls">
        <div class="scroll-y">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('locations'), 'location', false, 'location_id');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('location_id')->value => $_smarty_tpl->getVariable('location')->value) {
$foreach9DoElse = false;
?>
                    <label for="location_export_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['location_id']), ENT_QUOTES, 'UTF-8');?>
" class="checkbox"><input id="location_export_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['location_id']), ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="location_ids[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['location_id']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" class="cm-item" />
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['name']), ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['dispatch']), ENT_QUOTES, 'UTF-8');?>
)</label>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"links"), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>

<div class="control-group">
    <label for="output" class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("output", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls">
    <select name="output" id="output">
        <option value="D"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("direct_download", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
        <?php if (!$_smarty_tpl->getValue('runtime')['company_id']) {?>
            <option value="S"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("server", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
        <?php }?>
        <option value="C"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("screen", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="filename"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("filename", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls">
        <input type="text" name="filename" id="filename" size="50" value="layouts_<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')((defined('TIME') ? constant('TIME') : null),"%m%d%Y")), ENT_QUOTES, 'UTF-8');?>
.xml" />
    </div>
</div>

</div>

<div class="buttons-container">
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("export", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>"dispatch[block_manager.export_layout]",'cancel_action'=>"close"), (int) 0, $_smarty_current_dir);
?>
</div>
</form><?php }
}
