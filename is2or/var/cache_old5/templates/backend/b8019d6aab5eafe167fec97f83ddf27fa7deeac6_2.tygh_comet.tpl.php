<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/comet.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2c26a76_63883917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8019d6aab5eafe167fec97f83ddf27fa7deeac6' => 
    array (
      0 => 'common/comet.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2c26a76_63883917 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("processing", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
                        <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }
}
